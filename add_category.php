<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './includes/head.php' ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Add New Category</h2>
    <form action="store_category.php" method="POST" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">
        <div class="col-md-12">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" required>
        </div>
      </div>
      <div class="mt-4">
        <button type="submit" class="btn btn-success">Save Category</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
  <?php include_once './includes/footer.php' ?>
</body>
</html>
