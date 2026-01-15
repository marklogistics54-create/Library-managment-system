<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book - Library Management System</title>
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
                <h3 class="mb-0"><i class="bi bi-arrow-up-right"></i> Issue Book</h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="book_id" class="form-label">Book ID <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="book_id" name="book_id" placeholder="Enter book ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="student" class="form-label">Student Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="student" name="student" placeholder="Enter student name" required>
                    </div>
                    <button type="submit" name="issue" class="btn btn-warning w-100">
                        <i class="bi bi-check-circle"></i> Issue Book
                    </button>
                </form>
            </div>
        </div>

<?php
if (isset($_POST['issue'])) {
    $book_id = $_POST['book_id'];
    $student = $_POST['student'];
    $date = date("Y-m-d");

    mysqli_query($conn, "INSERT INTO issued_books VALUES('', '$book_id', '$student', '$date', '')");
    mysqli_query($conn, "UPDATE books SET quantity = quantity - 1 WHERE id='$book_id'");

    echo "<div class='alert alert-success mt-3'><i class='bi bi-check-circle'></i> Book Issued Successfully!</div>";
}
?>
            </div>
        </div>
    </div>
</body>
</html>
