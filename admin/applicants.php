<?php
include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Applicants - HireFlow Admin</title>

<link rel="stylesheet" href="admin.css">

</head>
<body>

<div class="sidebar">

<div class="logo">
HireFlow
</div>

<div class="menu">
<a href="dashboard.php">Dashboard</a>
<a href="applicants.php" class="active">Applicants</a>
<a href="jobs.php">Jobs</a>
<a href="analytics.php">Analytics</a>
<a href="settings.php">Settings</a>
<a href="logout.php">Logout</a>
</div>

</div>

<div class="main">

<h1 class="page-title">
Applicants
</h1>

<div class="table-box">

<table>

<tr>
<th>Name</th>
<th>Position</th>
<th>Email</th>
<th>Status</th>
</tr>

<?php
$query = mysqli_query(

    $conn,

    "SELECT * FROM applicants ORDER BY id DESC"

);

while($row = mysqli_fetch_assoc($query)){
echo "
<tr>
<td>".$row['fullname']."</td>
<td>".$row['position']."</td>
<td>".$row['email']."</td>
<td>
<span class='status review'>
New
</span>
</td>
</tr>

";

}

?>
  
</table>

</div>

</div>

<script src="admin.js"></script>

</body>
</html>
