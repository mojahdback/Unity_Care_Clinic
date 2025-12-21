<?php
include "../config_db.php";
$departments = mysqli_query($conn, "SELECT * FROM departments");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
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

<div class = "main">
    <div class="header">
        <h1>Add Doctor</h1>
    </div>

<form action="save_doctor.php" method="POST">

    <label>Full Name:</label><br>
    <input type="text" name="full_name" required><br><br>

    <label>Specialty:</label><br>
    <input type="text" name="specialty" ><br><br>

    <label>Department:</label><br>
    <select name="department_id" >
        <option value="">-- Select Department --</option>
        <?php while($d = mysqli_fetch_assoc($departments)) { ?>
            <option value="<?php echo $d['id']; ?>">
                <?php echo $d['name']; ?>
            </option>
        <?php } ?>
    </select><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Save</button>
</form>


</div>

</body>
</html>
