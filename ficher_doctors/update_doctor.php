<?php
include "../config_db.php";

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$specialty = $_POST['specialty'];
$department_id = $_POST['department_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE doctors SET
        full_name = '$full_name',
        specialty = '$specialty',
        department_id = $department_id,
        email = '$email',
        phone = '$phone'
        WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: doctors_list.php");
exit;
