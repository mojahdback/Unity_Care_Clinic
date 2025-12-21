<?php
include "../config_db.php";

$id = $_GET['id'];
$doctor = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM doctors WHERE id = $id")
);

$departments = mysqli_query($conn, "SELECT * FROM departments");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Doctor</title>
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
        <h1>Edit Doctor</h1>
    </div>


    <form action="update_doctor.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $doctor['id']; ?>">

    <label>Full Name:</label><br>
    <input type="text" name="full_name" value="<?php echo $doctor['full_name']; ?>" required><br><br>

    <label>Specialty:</label><br>
    <input type="text" name="specialty" value="<?php echo $doctor['specialty']; ?>" required><br><br>

    <label>Department:</label><br>
    <select name="department_id" required>
        <?php while($d = mysqli_fetch_assoc($departments)) { ?>
            <option value="<?php echo $d['id']; ?>"
                <?php if($d['id'] == $doctor['department_id']) echo "selected"; ?>>
                <?php echo $d['name']; ?>
            </option>
        <?php } ?>
    </select><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $doctor['email']; ?>"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="<?php echo $doctor['phone']; ?>"><br><br>

    <button type="submit">Update</button>
</form>



</div>


</body>
</html>
