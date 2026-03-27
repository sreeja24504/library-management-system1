<?php
include 'db.php';

if(isset($_POST['add'])) {

    $tittle = $_POST['tittle'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO books (tittle, author, quantity)
            VALUES ('$tittle', '$author', '$quantity')";

    if(mysqli_query($conn, $sql)) {
        echo "Book Added Successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Add Book</h2>

<form method="POST">
    <input type="text" name="tittle" placeholder="Book Title" required><br><br>
    <input type="text" name="author" placeholder="Author" required><br><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br><br>

    <button type="submit" name="add">Add Book</button>
</form>