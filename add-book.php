<?php 

$book_name   = !empty( $_POST['book_name'] ) ? $_POST['book_name'] : '';
$author      = !empty( $_POST['author'] ) ? $_POST['author'] : '';
$publisher   = !empty( $_POST['publisher'] ) ? $_POST['publisher'] : '';
$description = !empty( $_POST['description'] ) ? $_POST['description'] : '';

if( empty( $book_name ) ) {
    echo "Boi ar nam dao nai" . "<br>";
}
if( empty( $author ) ) {
    echo "Author chara boi hoy na naile default author Rakib" . '<br>';
}

if( empty( $book_name ) || empty( $author ) ) {
    exit;
}



echo "Book name - " . $book_name . "<br>";
echo "Author - " . $author  . "<br>";
echo "Publisher - " . $publisher  . "<br>";
echo "Description - " . $description  . "<br>";