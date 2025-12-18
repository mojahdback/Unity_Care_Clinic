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
</head>
<body>

<h2>Edit Patient</h2>

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

</body>
</html>
