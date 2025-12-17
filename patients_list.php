<?php
include "config_db.php";

$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patients List</title>
</head>
<body>

<h2>Patients List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions</th>

    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="delete_patient.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Are you sure?')">
                Delete
                 </a>
            </td>
        </tr>
   

    <?php } ?>

</table>

</body>
</html>
