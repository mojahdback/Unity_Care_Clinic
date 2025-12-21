<?php
include "../config_db.php";

$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patients List</title>
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



<div class ="main">
        <div class = "header">
            <div>
               <h1>Patients List</h1>
            </div>
            <div>
                   <a href="add_patients.php">➕ Add Department</a>
            </div>
        <br>
        </div>
      

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions </th>

    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="delete_patient.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Are you sure?')">
                Delete
                 </a>
                 <a href="edit_patient.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>
   

    <?php } ?>

</table>

    



 </div>
 

</body>
</html>
