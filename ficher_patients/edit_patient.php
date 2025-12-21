<?php
include "../config_db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM patients WHERE id = $id";
$result = mysqli_query($conn, $sql);
$patient = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Patient</title>
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


<div class="main">
    <div class="header">
      <h1>Edit Patient</h1>
    </div>

    <form action="update_patient.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $patient['id']; ?>">

    <label>Full Name:</label><br>
    <input type="text" name="full_name" value="<?php echo $patient['full_name']; ?>" required><br><br>

    <label>Gender:</label><br>
    <input type="text" name="gender" value="<?php echo $patient['gender']; ?>" required><br><br>

    <label>Date of Birth:</label><br>
    <input type="date" name="date_of_birth" value="<?php echo $patient['date_of_birth']; ?>" required><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="<?php echo $patient['phone']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $patient['email']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>

</div>





</body>
</html>
