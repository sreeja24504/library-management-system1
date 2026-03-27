<?php
include 'db.php';

if(isset($_POST['issue'])) {
    $book_id = $_POST['book_id'];
    $user_id = $_POST['user_id'];

    $sql = "INSERT INTO issued_books (book_id, user_id, issue_date)
            VALUES ('$book_id', '$user_id', CURDATE())";

    if(mysqli_query($conn, $sql)) {
        echo "Book Issued!";
    }
}
?>

<form method="POST">
    Book ID: <input type="number" name="book_id"><br><br>
    User ID: <input type="number" name="user_id"><br><br>
    <button name="issue">Issue Book</button>
</form>