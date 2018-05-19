<?php
require_once 'mysql.php';
$id = $_GET['id'];
$mysqli = mysqli_connect("127.0.0.1", "Kostya", "basarab1970", "test");
if (mysqli_connect_errno($mysqli)) {
	echo "Не удалось подключиться" . mysqli_connect_error();
}

$del = mysqli_query($mysqli, "DELETE FROM test WHERE id = '$id'");
$rows = mysqli_fetch_all($del, MYSQLI_ASSOC);
echo "<table border='1'>";
foreach ($rows as $row) {
	echo "<tr><td>".$row['id'].'</td><td>'.$row['user'].'</td><td><a href="/delete.php">delete</a></td></tr>';
}
echo "</table>";