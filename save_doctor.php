<?php
include "config_db.php";

$full_name = $_POST['full_name'];
$specialty = $_POST['specialty'];
$department_id = $_POST['department_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO doctors (full_name, specialty, department_id, email, phone)
        VALUES ('$full_name', '$specialty', $department_id, '$email', '$phone')";

mysqli_query($conn, $sql);

header("Location: doctors_list.php");
exit;
