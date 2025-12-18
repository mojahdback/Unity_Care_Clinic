<?php
include "config_db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM departments WHERE id = $id");
$department = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Department</title>
</head>
<body>

<h2>Edit Department</h2>

<form action="update_department.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $department['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $department['name']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
