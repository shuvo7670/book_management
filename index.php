<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once './config.php';
        include_once './includes/head.php'
    ?>
    <?php
        $sql = "SELECT * FROM `books`";
        $result = $connection->query($sql);
    ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3">📚 Book List</h1>
      <a href="create.php" class="btn btn-primary">+ Add New Book</a>
    </div>
    <table class="table table-hover table-bordered bg-white shadow-sm">
      <thead class="table-light">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
             if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['book_name'] ?></td>
                            <td><?php echo $row['author'] ?></td>
                            <td><?php echo $row['isbn'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td>
                                <a href="view.html?id=1" class="btn btn-sm btn-info">View</a>
                                <a href="edit.html?id=1" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.html?id=1" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php 
                }
            } else {
                echo "0 results found";
            }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
