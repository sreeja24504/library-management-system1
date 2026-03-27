<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>

<h2>Books List</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Book Name</th>
<th>Writer</th>
<th>Quantity</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['books_id']; ?></td>
<td><?php echo $row['tittle']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['quantity']; ?></td>

<td>
<a href="edit_book.php?id=<?php echo $row['books_id']; ?>">Edit</a> |
<a href="delete_book.php?id=<?php echo $row['books_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
</td>

</tr>
<?php } ?>

</table>