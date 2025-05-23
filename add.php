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
$cover_image_url = $_POST['cover_image_url'];

if( $is_connect ) {
    $sql = "INSERT INTO `books`(`book_name`, `author`, `isbn`, `publisher`, `publish_date`, `category`, `language`, `pages`, `description`, `cover_image_url`) VALUES ('$book_name','$author','$isbn','$publisher','$publish_date','$category','$language','$pages','$description','$cover_image_url')";
    if( $connection->query($sql) === true ) {
        echo "New book added";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }
}