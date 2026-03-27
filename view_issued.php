<?php
include 'db.php';

$sql = "SELECT issued_books.id, books.tittle, user.name, issued_books.issue_date
        FROM issued_books
        JOIN books ON issued_books.book_id = books.books_id
        JOIN user ON issued_books.user_id = user.id";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
?>

<h2>Issued Books</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Book Name</th>
<th>User Name</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['tittle']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['issue_date']; ?></td>

<td>
<a href="return_book.php?id=<?php echo $row['id']; ?>">Return</a>
</td>
</tr>
<?php } ?>

</table>