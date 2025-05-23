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
    <div class="card p-4 shadow-sm">
      <div class="row">
        <div class="col-md-8">
          <h3><?php echo $book['book_name'] ?></h3>
          <p><strong>Author:</strong> <?php echo $book['author'] ?></p>
          <p><strong>ISBN:</strong> <?php echo $book['isbn'] ?></p>
          <p><strong>Publisher:</strong> <?php echo $book['publisher'] ?></p>
          <p><strong>Published Date:</strong> <?php echo $book['publish_date'] ?></p>
          <p><strong>Category:</strong> <?php echo $book['category'] ?></p>
          <p><strong>Language:</strong> <?php echo $book['language'] ?></p>
          <p><strong>Pages:</strong> <?php echo $book['pages'] ?></p>
          <p><strong>Description:</strong> <?php echo $book['description'] ?></p>
          <a href="/" class="btn btn-secondary mt-3">← Back to List</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
