<?php
include "config_db.php";

$patients = mysqli_query($conn, "SELECT COUNT(*) AS total FROM patients");
$total_patients = mysqli_fetch_assoc($patients)['total'];


$doctors = mysqli_query($conn, "SELECT COUNT(*) AS total FROM doctors");
$total_doctors = mysqli_fetch_assoc($doctors)['total'];


$departments = mysqli_query($conn, "SELECT COUNT(*) AS total FROM departments");
$total_departments = mysqli_fetch_assoc($departments)['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Unity Care Clinic | Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f4f6f8;
    }

    .sidebar {
      width: 220px;
      height: 100vh;
      background-color: #2c7be5;
      color: #fff;
      position: fixed;
      padding: 20px;
    }

    .sidebar h2 {
      margin-bottom: 30px;
      font-size: 20px;
      text-align: center;
    }

    .sidebar a {
      display: block;
      color: #fff;
      text-decoration: none;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .main {
      margin-left: 240px;
      padding: 20px;
    }

    .header {
      margin-bottom: 20px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .card {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 28px;
      font-weight: bold;
      color: #2c7be5;
    }

    .section {
      margin-top: 30px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    footer {
      margin-top: 30px;
      text-align: center;
      font-size: 12px;
      color: #999;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Unity Care</h2>
    <a href="dashbord.html">Dashboard</a>
    <a href="patients_list.php">Patients</a>
    <a href="#">Doctors</a>
    <a href="#">Departments</a>
    <a href="#">Settings</a>
  </div>

  <div class="main">
    <div class="header">
      <h1>Dashboard</h1>
      <p>Overview of clinic activity</p>
    </div>

    <div class="cards">
      <div class="card">
        <h3>Total Patients</h3>
        <p><?php echo $total_patients; ?></p>

      </div>
      <div class="card">
        <h3>Total Doctors</h3>
        <p>42</p>
      </div>
      <div class="card">
        <h3>Departments</h3>
        <p>8</p>
      </div>
      <div class="card">
        <h3>Appointments Today</h3>
        <p>128</p>
      </div>
    </div>

    <div class="section">
      <h2>System Summary</h2>
      <p>
        This dashboard gives administrators a quick overview of the Unity Care Clinic system.
        From here, you can manage patients, doctors, departments, and monitor overall activity.
      </p>
    </div>

    <footer>
      © 2025 Unity Care Clinic – Backoffice Dashboard
    </footer>
  </div>

</body>
</html>
