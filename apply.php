<?php

include "config.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$portfolio = $_POST['portfolio'];
$about = $_POST['about'];

$sql = "INSERT INTO applicants
(fullname,email,phone,position,portfolio,about)
VALUES
('$fullname','$email','$phone','$position','$portfolio','$about')";

mysqli_query($conn,$sql);

header("Location:index.php?success=1");

?>
