<?php
include "../config_db.php";

$sql = "SELECT doctors.*, departments.name AS department_name
        FROM doctors
        LEFT JOIN departments ON doctors.department_id = departments.id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctors</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="sidebar">
  <h2>Unity Care</h2>
  <a href="../dashbord.php">📊 Dashboard</a>
  <a href="../ficher_patients/patients_list.php">🧑‍🤝‍🧑 Patients</a>
  <a href="../ficher_doctors/doctors_list.php">👨‍⚕️ Doctors</a>
  <a href="../ficher_departments/departments_list.php">🏥 Departments</a>
  <a href="#">⚙️ Settings</a>
 </div>

<div  class ="main">
   
        <div class="header">
            <h1>Doctors</h1>
            <a href="add_doctor.php">➕ Add Doctor</a>
            <br>
        </div>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Specialty</th>
        <th>Department</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['specialty']; ?></td>
        <td><?php echo $row['department_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>
            <a href="edit_doctor.php?id=<?php echo $row['id']; ?>">Edit</a> |
            <a href="delete_doctor.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Delete this doctor?')">
               Delete
            </a>
        </td>
    </tr>
    <?php } ?>

</table>

</div>

</body>
</html>
