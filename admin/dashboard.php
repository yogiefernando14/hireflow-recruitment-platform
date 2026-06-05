<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

    exit;

}

include "../config.php";

$totalApplicants = mysqli_num_rows(

    mysqli_query($conn,"SELECT * FROM applicants")

);

?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HireFlow Admin Dashboard</title>

<link rel="stylesheet" href="admin.css">

</head>

<body>

<div class="sidebar">

<div class="logo">

HireFlow

</div>

<div class="menu">

<a href="dashboard.php" class="active">Dashboard</a>

<a href="applicants.php">Applicants</a>

<a href="jobs.php">Jobs</a>

<a href="analytics.php">Analytics</a>

<a href="settings.php">Settings</a>
<a href="logout.php">Logout</a>

</div>

</div>

<div class="main">

<h1 class="page-title">

Admin Dashboard

</h1>

<p style="color:#999;margin-bottom:30px;">

Recruitment Overview

</p>

<div class="cards">

<div class="card">

<h2><?php echo $totalApplicants; ?></h2>

<p>Applications</p>

</div>

<div class="card">

<h2>52</h2>

<p>Open Jobs</p>

</div>

<div class="card">

<h2>120</h2>

<p>Interviews</p>

</div>

<div class="card">

<h2>34</h2>

<p>Hired</p>

</div>

</div>

<div class="table-box">

<h2 style="margin-bottom:20px;">

Recent Applicants

</h2>

<table>

<tr>

<th>Name</th>

<th>Position</th>

<th>Status</th>

</tr>
<?php

$result = mysqli_query(
$conn,
"SELECT * FROM applicants ORDER BY id DESC LIMIT 10"
);

while($row = mysqli_fetch_assoc($result)){

echo "
<tr>
<td>{$row['fullname']}</td>
<td>{$row['position']}</td>
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

<div class="activity">

<h2>

Recent Activity

</h2>

<ul>

<li>New application submitted</li>

<li>Interview scheduled</li>

<li>Frontend Developer job posted</li>

<li>Candidate accepted offer</li>

</ul>

</div>

</div>

<script src="admin.js"></script>

</body>

</html>
