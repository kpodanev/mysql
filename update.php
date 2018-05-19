<?php
require_once 'mysql.php';
$id = $_GET['id'];
$mysqli = mysqli_connect("127.0.0.1", "Kostya", "basarab1970", "test");
if (mysqli_connect_errno($mysqli)) {
	echo "Не удалось подключиться" . mysqli_connect_error();
}

$upd = mysqli_query($mysqli, "UPDATE FROM test WHERE id = '$id'");
