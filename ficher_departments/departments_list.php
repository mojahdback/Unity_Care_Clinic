<?php
include "../config_db.php";
$result = mysqli_query($conn, "SELECT * FROM departments");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

 <div class="sidebar">
  <h2>Unity Care</h2>
  <a href="../dashbord.php">📊 Dashboard</a>
  <a href="ficher_patients/patients_list.php">🧑‍🤝‍🧑 Patients</a>
  <a href="ficher_doctors/doctors_list.php">👨‍⚕️ Doctors</a>
  <a href="ficher_departments/departments_list.php">🏥 Departments</a>
  <a href="#">⚙️ Settings</a>
 </div>

<h2>Departments</h2>
<a href="add_department.php">➕ Add Department</a>
<br>


<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>
                <a href="edit_department.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete_department.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this department?')">
                   Delete
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
