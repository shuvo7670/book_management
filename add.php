<?php 

// mysql connection
$servername = 'localhost';
$username   = "root";
$password   = "";
$dbname     = 'book_manage';
$is_connect = false;

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    $is_connect = true;
}else {
    echo "Connect hoy nai abr dekho ki somossa";
}


// Get all data from form
$book_name       = $_POST['book_name'];
$author          = $_POST['author'];
$isbn            = $_POST['isbn'];
$publisher       = $_POST['publisher'];
$publish_date    = $_POST['publish_date'];
$category        = $_POST['category'];
$language        = $_POST['language'];
$pages           = $_POST['pages'];
$description     = $_POST['description'];
$cover_image_url = $_FILES['cover_image_url'];

if( !empty( $cover_image_url ) ) {
    // Target directory to save uploaded images
    $targetDir = "uploads/";
    // Get original file name and create full path
    $fileName = basename($_FILES["cover_image_url"]["name"]);
    $targetFile = $targetDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is an actual image
    $check = getimagesize($_FILES["cover_image_url"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

       // Check file size (e.g. 5MB max)
    if ($_FILES["cover_image_url"]["size"] > 5 * 1024 * 1024) {
        die("File is too large.");
    }

    // Allow certain file formats
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        die("Only JPG, JPEG, PNG & GIF files are allowed.");
    }
    
    // Move file to target directory
    if (move_uploaded_file($_FILES["cover_image_url"]["tmp_name"], $targetFile)) {
        // echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    }
}

if( $is_connect ) {
    $sql = "INSERT INTO `books`(`book_name`, `author`, `isbn`, `publisher`, `publish_date`, `category`, `language`, `pages`, `description`, `cover_image_url`) VALUES ('$book_name','$author','$isbn','$publisher','$publish_date','$category','$language','$pages','$description','$targetFile')";
    if( $connection->query($sql) === true ) {
        echo "New book added";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }
}