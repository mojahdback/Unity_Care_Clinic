<?php
include "../config_db.php";

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "UPDATE departments SET
        name = '$name',
        WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: departments_list.php");
exit;
