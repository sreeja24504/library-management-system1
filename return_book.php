<?php
include 'db.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM issue_books WHERE id=$id");

header("Location: view_issued.php");
?>