<?php
session_start();
include "../config.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query(
        $conn,
        "SELECT * FROM admins WHERE username='$username'"
    );
    if(mysqli_num_rows($query) > 0){
        $admin = mysqli_fetch_assoc($query);
        if(password_verify($password, $admin['password'])){
            $_SESSION['admin'] = $admin['username'];
            header("Location: dashboard.php");
            exit;
        }else{
            $error = "Password salah";
        }
    }else{
        $error = "Username tidak ditemukan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" href="admin.css">
<style>
body{
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
}
.login-box{
width:100%;
max-width:420px;
background:#111;
padding:40px;
border-radius:24px;
}
</style>
</head>
<body>
<div class="login-box">
<h1>Admin Login</h1>
<?php
if(isset($error)){
echo "<p style='color:red'>$error</p>";
}
?>
<form method="POST">

Login
</form>
</div>
</body>
</html>
