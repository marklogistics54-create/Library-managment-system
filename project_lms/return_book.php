<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book - Library Management System</title>
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
                <h3 class="mb-0"><i class="bi bi-arrow-down-left"></i> Return Book</h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="issue_id" class="form-label">Issue ID <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="issue_id" name="issue_id" placeholder="Enter issue ID" required>
                    </div>
                    <button type="submit" name="return" class="btn btn-success w-100">
                        <i class="bi bi-check-circle"></i> Return Book
                    </button>
                </form>
            </div>
        </div>

<?php
if (isset($_POST['return'])) {
    $id = $_POST['issue_id'];
    $date = date("Y-m-d");

    mysqli_query($conn, "UPDATE issued_books SET return_date='$date' WHERE id='$id'");
    echo "<div class='alert alert-success mt-3'><i class='bi bi-check-circle'></i> Book Returned Successfully!</div>";
}
?>
            </div>
        </div>
    </div>
</body>
</html>
