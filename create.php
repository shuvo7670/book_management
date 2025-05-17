<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './includes/head.php' ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Add New Book</h2>
    <form action="add.php" method="POST" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Book Name</label>
            <input name="book_name" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Author</label>
            <input name="author" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">ISBN</label>
            <input name="isbn" type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Publisher</label>
            <input name="publisher" type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Published Date</label>
            <input name="publish_date" type="date" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Category</label>
            <input name="category" type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Language</label>
            <input name="language" type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Pages</label>
            <input name="pages" type="number" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea></div>
        <div class="col-12">
            <label class="form-label">Cover Image URL</label>
            <input name="cover_image_url" type="url" class="form-control">
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
