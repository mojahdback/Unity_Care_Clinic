<?php
include "../config_db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM doctors WHERE id = $id");

header("Location: doctors_list.php");
exit;
