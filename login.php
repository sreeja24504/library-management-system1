<?php
session_start();
include 'db.php';

if(isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if($row['password'] == $password) {
        $_SESSION['user'] = $row['name'];
        header("Location: dashboard1.php");
        exit();
    } else {
        echo "Wrong Password!";
    }
}
} else {
    echo "Email not found!";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Library Management System Login</h2>

<?php
if(isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>