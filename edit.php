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
    <?php
        $sql    = "SELECT * FROM `categories`";
        $result = mysqli_query($connection, $sql);
        $categories   = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Edit New Book</h2>
    <form action="update.php" method="POST" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">
        <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
        <div class="col-md-6">
            <label class="form-label">Book Name</label>
            <input name="book_name" value="<?php echo $book['book_name'] ?>" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Author</label>
            <input name="author" value="<?php echo $book['author'] ?>" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">ISBN</label>
            <input name="isbn" value="<?php echo $book['isbn'] ?>" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Publisher</label>
            <input name="publisher" value="<?php echo $book['publisher'] ?>" type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Published Date</label>
            <input name="publish_date" value="<?php echo $book['publish_date'] ?>" type="date" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Category</label>
            <select name="category" class="form-select">
                <?php foreach(  $categories as $category ) : ?>
                    <option <?php echo $category['id'] == $book['category'] ? 'selected' : '' ?> value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Language</label>
            <input name="language" value="<?php echo $book['language'] ?>" type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Pages</label>
            <input name="pages" value="<?php echo $book['pages'] ?>" type="number" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"><?php echo $book['description'] ?></textarea></div>
        <div class="col-12">
            <label class="form-label">Cover Image URL</label>
            <input name="cover_image_url" value="<?php echo $book['cover_image_url'] ?>" type="url" class="form-control">
        </div>
      </div>
      <div class="mt-4">
        <button type="submit" class="btn btn-success">Save Book</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
  <?php include_once './includes/footer.php' ?>
</body>
</html>
