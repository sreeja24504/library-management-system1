<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE books_id='$id'";

if(mysqli_query($conn, $sql)) {
    header("Location: view_books.php");
}
?>