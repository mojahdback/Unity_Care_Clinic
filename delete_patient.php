<?php
include "config_db.php";

$id = $_GET['id'];

$sql = "DELETE FROM patients WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: patients_list.php");
exit;
