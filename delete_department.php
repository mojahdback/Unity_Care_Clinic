<?php
include "config_db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM departments WHERE id = $id");

header("Location: departments_list.php");
exit;
