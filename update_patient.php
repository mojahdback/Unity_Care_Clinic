<?php
include "config_db.php";

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "UPDATE patients SET
        full_name = '$full_name',
        gender = '$gender',
        date_of_birth = '$date_of_birth',
        phone = '$phone',
        email = '$email'
        WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: patients_list.php");

exit;