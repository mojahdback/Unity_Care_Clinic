<!DOCTYPE html>
<html>
<head>
    <title>Add Department</title>
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
        <h1>Add Department</h1>
    </div>

    <form action="save_department.php" method="POST">
    <label>Department Name:</label><br>
    <input type="text" name="name" required><br><br>
    <button type="submit">Save</button>
    </form>


</div>



</body>
</html>
