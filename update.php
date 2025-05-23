<?php 

require_once './config.php';


// Get all data from form
$id              = $_POST['id'];
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
    $sql = "UPDATE books 
    SET book_name = '$book_name', author = '$author', isbn = '$isbn', publisher = '$publisher',  publish_date = '$publish_date', category = '$category', language = '$language', pages = '$pages', description = '$description', cover_image_url = '$cover_image_url' WHERE id = $id";
    if( $connection->query($sql) === true ) {
        echo "Book Updated Successfully";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }
}