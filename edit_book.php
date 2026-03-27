<?php
include 'db.php';

$id = $_GET['id'];

// Fetch old data
$sql = "SELECT * FROM books WHERE books_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {
    $tittle = $_POST['tittle'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $update = "UPDATE books SET 
        tittle='$tittle', 
        author='$author', 
        quantity='$quantity' 
        WHERE books_id='$id'";

    if(mysqli_query($conn, $update)) {
        header("Location: view_books.php");
        exit();
    }
}
?>

<h2>Edit Book</h2>

<form method="POST">
<input type="text" name="tittle" value="<?php echo $row['tittle']; ?>"><br><br>
<input type="text" name="author" value="<?php echo $row['author']; ?>"><br><br>
<input type="number" name="quantity" value="<?php echo $row['quantity']; ?>"><br><br>

<button type="submit" name="update">Update</button>
</form>