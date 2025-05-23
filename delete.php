<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once './config.php';
        include_once './includes/head.php'
    ?>
    <?php 
        $id = $_GET['id'];
        $sql = "SELECT * from books WHERE id = $id";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $book = $data[0];
    ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 shadow-sm text-center">
      <h4 class="mb-3 text-danger">Are you sure you want to delete this book?</h4>
      <p><strong><?php echo $book['book_name'] ?></strong></p>
      <form>
        <input type="hidden" name="id" value="1">
        <a href="flash.php?id=<?php echo $book['id'] ?>" class="btn btn-danger">Yes, Delete</a>
        <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
      </form>
    </div>
  </div>
</body>
</html>
