<?php

$conn = new mysqli('localhost', 'root', '', 'dbLogin');
if (isset($_POST['Login'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $result = $conn->query("SELECT * FROM User WHERE username='$Username'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $md5password = md5($Password);

        if ($md5password === $user['password']) {
            header("Location: https://github.com/MuhamadAbsorDwiyana/crud");
            exit();
        } else {
            header("Location: index.php?error=password");
            exit();
        }
    } else if ($Username === "") {
        header("Location: index.php?error=null");
        exit();
    } else {
        header("Location: index.php?error=username");
        exit();}
}
$conn->close();
?>