<?php 
  function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

$errors = [];

$book_name   = !empty( $_POST['book_name'] ) ? clean_input($_POST['book_name']) : '';
$author      = !empty( $_POST['author'] ) ? clean_input($_POST['author']) : '';
$publisher   = !empty( $_POST['publisher'] ) ? clean_input($_POST['publisher']) : '';
$description = !empty( $_POST['description'] ) ? clean_input($_POST['description']) : '';
$email       = !empty( $_POST['email'] ) ? clean_input($_POST['email']) : '';
$phone       = !empty( $_POST['phone'] ) ? clean_input($_POST['phone']) : '';
$website     = !empty( $_POST['website'] ) ? clean_input($_POST['website']) : '';


if( empty( $book_name ) ) {
    $errors[] = "Book name is required";
}
if( empty( $author ) ) {
    $errors[] = "Author name is required";
}

// Email validation 
if( empty( $email ) ) {
    $errors[] = "Email Address is required";
}
if( !empty( $email ) && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    $errors[] = "Email Address is not valid";
}

// Phone validation 
if( empty( $phone ) ) {
    $errors[] = "Phone Number is required";
}
$phonePattern = "/^\+?[0-9\s\-]{7,20}$/";
if( !empty( $phone ) && !preg_match($phonePattern, $phone) ) {
    $errors[] = "Phone number format is invalid.";
}
if( empty( $website ) ) {
    $errors[] = "Website field is required";
}
if( !empty( $website ) && !filter_var( $website, FILTER_VALIDATE_URL ) ) {
    $errors[] = "Website field is invalid.";
}

if( count( $errors ) == 0 ) {
    echo "Book name - " . $book_name . "<br>";
    echo "Author - " . $author  . "<br>";
    echo "Publisher - " . $publisher  . "<br>";
    echo "Description - " . $description  . "<br>";
    echo "Email - " . $email  . "<br>";
    echo "Phone - " . $phone  . "<br>";
    echo "Website - " . $website  . "<br>";
}


echo "<pre>";
print_r( $errors );
die();
