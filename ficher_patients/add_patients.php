<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
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
  <div class = "header">
    <h1>Add New Patient</h1>

  </div>
  <form action="save_data.php" method="POST">

    <label>Name:</label><br>
    <input type="text" name="full_name" required><br><br>

  <select name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
   </select>

    <label>Date of birth:</label><br>
    <input type="date" name="date_of_birth" required><br><br>

    <label>Telephone:</label><br>
    <input type="number" name="phone" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Save</button>
   </form>
  </div>
</body>
</html>
