<?php 

require_once './config.php';

$name = $_POST['name'];

if( $is_connect ) {
    $sql = "INSERT INTO `categories`(`name`) VALUES ('$name')";
    if( $connection->query($sql) === true ) {
        echo "New category added";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }
}