<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book - Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <a href="index.php" class="back-btn">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Book</h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="book_name" class="form-label">Book Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter book name" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" min="1" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary w-100">
                        <i class="bi bi-check-circle"></i> Add Book
                    </button>
                </form>
            </div>
        </div>


<?php
if (isset($_POST['add'])) {
    $book = $_POST['book_name'];
    $author = $_POST['author'];
    $qty = $_POST['quantity'];

    mysqli_query($conn, "INSERT INTO books VALUES('', '$book', '$author', '$qty')");
    echo "<div class='alert alert-success mt-3'>
            <i class='bi bi-check-circle'></i> Book Added Successfully!
          </div>";
}
?>
            </div>
        </div>
    </div>
</body>
</html>
