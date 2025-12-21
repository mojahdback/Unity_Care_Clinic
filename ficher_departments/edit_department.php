<?php
include "../config_db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM departments WHERE id = $id");
$department = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Department</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

 <div class="sidebar">
  <h2>Unity Care</h2>
  <a href="../dashbord.php"> 📊 Dashboard</a>
  <a href="../ficher_patients/patients_list.php">🧑‍🤝‍🧑 Patients</a>
  <a href="../ficher_doctors/doctors_list.php">👨‍⚕️ Doctors</a>
  <a href="../ficher_departments/departments_list.php">🏥 Departments</a>
  <a href="#">⚙️ Settings</a>
 </div>


<div class="main">
    <div class="header">
       <h1>Edit Department</h1>
    </div>
    <form action="update_department.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $department['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $department['name']; ?>" required><br><br>

    <button type="submit">Update</button>
    </form>

</div>

</body>
</html>
