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
  <link rel="stylesheet" href="css/style.css">
  <title>Unity Care Clinic | Dashboard</title>

</head>
<body>

 <div class="sidebar">
  <h2>Unity Care</h2>
  <a href="dashbord.php">📊 Dashboard</a>
  <a href="ficher_patients/patients_list.php">🧑‍🤝‍🧑 Patients</a>
  <a href="ficher_doctors/doctors_list.php">👨‍⚕️ Doctors</a>
  <a href="ficher_departments/departments_list.php">🏥 Departments</a>
  <a href="#">⚙️ Settings</a>
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
       <p><?php echo $total_doctors; ?></p>
      </div>
      <div class="card">
        <h3>Departments</h3>
        <p><?php echo $total_departments; ?></p>
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
