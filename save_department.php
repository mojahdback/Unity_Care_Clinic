<?php
include "config_db.php";

$name = $_POST['name'];

$sql = "INSERT INTO departments (name)
        VALUES ('$name')";

mysqli_query($conn, $sql);

header("Location: departments_list.php");
exit;
