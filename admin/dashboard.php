<?php

session_start();

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

<a href="dashboard.html" class="active">Dashboard</a>

<a href="applicants.html">Applicants</a>

<a href="jobs.html">Jobs</a>

<a href="analytics.html">Analytics</a>

<a href="settings.html">Settings</a>

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

<h2>1248</h2>

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

<tr>

<td>Yogie Fernando</td>

<td>Frontend Developer</td>

<td><span class="status review">Reviewing</span></td>

</tr>

<tr>

<td>Sarah Johnson</td>

<td>UI/UX Designer</td>

<td><span class="status interview">Interview</span></td>

</tr>

<tr>

<td>Michael Lee</td>

<td>Video Editor</td>

<td><span class="status accepted">Accepted</span></td>

</tr>

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
