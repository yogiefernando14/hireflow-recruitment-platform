<?php

$host = "sql105.infinityfree.com";
$user = "if0_42102747";
$pass = "YogiAkunBaru14";
$db   = "if0_42102747_hireflow";

$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $db
);

if(!$conn){
    die("Database gagal terkoneksi");
}
?>
