<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?> 🎉</h2>

<a href="add_book.php">Add Book</a><br><br>
<a href="view_books.php">View Books</a><br><br>
<a href="view_issued.php">Issued Books</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>