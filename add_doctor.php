<?php
include "config_db.php";
$departments = mysqli_query($conn, "SELECT * FROM departments");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
</head>
<body>

<h2>Add Doctor</h2>

<form action="save_doctor.php" method="POST">

    <label>Full Name:</label><br>
    <input type="text" name="full_name" required><br><br>

    <label>Specialty:</label><br>
    <input type="text" name="specialty" required><br><br>

    <label>Department:</label><br>
    <select name="department_id" required>
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

</body>
</html>
