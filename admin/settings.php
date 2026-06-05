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
<title>Settings - HireFlow Admin</title>

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
<a href="analytics.php">Analytics</a>
<a href="settings.php" class="active">Settings</a>
<a href="logout.php">Logout</a> 
</div>

</div>

<div class="main">

<h1 class="page-title">
Settings
</h1>

<div class="table-box">

<h2 style="margin-bottom:20px;">
Company Information
</h2>

<input type="text" placeholder="Company Name" value="HireFlow">

<input type="email" placeholder="Company Email" value="hr@hireflow.com">

<input type="text" placeholder="Company Location" value="Jakarta, Indonesia">

<button>
Save Changes
</button>

</div>

<div class="table-box" style="margin-top:30px;">

<h2 style="margin-bottom:20px;">
Recruitment Settings
</h2>

<input type="text" placeholder="Default Job Status" value="Open">

<input type="text" placeholder="Application Review Time" value="7 Days">

<button>
Update Settings
</button>

</div>

</div>

<script src="admin.js"></script>

</body>
</html>
