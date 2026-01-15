<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books - Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Quick override to ensure table text is visible if stylesheet cached/overridden */
        .table th, .table td { color: #2d3748 !important; }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="back-btn">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>
        
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0"><i class="bi bi-book"></i> Available Books</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM books");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['book_name']}</td>
                <td>{$row['author']}</td>
                <td>{$row['quantity']}</td>
            </tr>";
        }
        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
