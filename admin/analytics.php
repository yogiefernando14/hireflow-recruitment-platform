<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Analytics - HireFlow Admin</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="sidebar">
<div class="logo">
HireFlow
</div>
<div class="menu">
<a href="dashboard.php">Dashboard</a>
<a href="applicants.php">Applicants</a>
<a href="jobs.php">Jobs</a>
<a href="analytics.php" class="active">Analytics</a>
<a href="settings.php">Settings</a>
<a href="logout.php">Logout</a>
</div>
</div>
<div class="main">
<h1 class="page-title">
Applications Growth
</h1>
<div class="chart">
<div class="bar-group">
<div class="value">120</div>
<div class="bar" style="height:50px;"></div>
<div class="label">Jan</div>
</div>
<div class="bar-group">
<div class="value">240</div>
<div class="bar" style="height:90px;"></div>
<div class="label">Feb</div>
</div>
<div class="bar-group">
<div class="value">380</div>
<div class="bar" style="height:130px;"></div>
<div class="label">Mar</div>
</div>
<div class="bar-group">
<div class="value">520</div>
<div class="bar" style="height:170px;"></div>
<div class="label">Apr</div>
</div>
<div class="bar-group">
<div class="value">760</div>
<div class="bar" style="height:210px;"></div>
<div class="label">May</div>
</div>
<div class="bar-group">
<div class="value">1248</div>
<div class="bar" style="height:250px;"></div>
<div class="label">Jun</div>
</div>
</div>
</div>
<script src="admin.js"></script>
</body>
</html>
