<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
</head>
<body>

<h2>Add New Patient</h2>

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
    <br>
    <a href="add_patients.php">Display</a>
    

</form>

</body>
</html>
