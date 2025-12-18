<?php
include "../config_db.php";


$full_name     = $_POST['full_name'];
$gender        = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$phone         = $_POST['phone'];
$email         = $_POST['email'];

 
$sql = "INSERT INTO patients 
(full_name, gender, date_of_birth, phone, email)
VALUES ('$full_name', '$gender', '$date_of_birth', '$phone', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Patient added successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
