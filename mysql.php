<!DOCTYPE html>
<html lang="en">

<?php

$mysqli = mysqli_connect("127.0.0.1", "Kostya", "basarab1970", "test");
if (mysqli_connect_errno($mysqli)) {
	echo "Не удалось подключиться" . mysqli_connect_error();
}

$res = mysqli_query($mysqli, "SELECT * FROM test");
$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
echo "<table border='1'>";
echo  '<tr><td>'.<a href="/create.php">create</a>.'</td></tr>';
foreach ($rows as $row) {
	echo '<tr><td>'.$row['id'].'</td><td>'.$row['user'].'</td><td>'.<a href="/delete.php?id = "$row['id']"">delete</a>.'</td><td>'.<a href="/update.php?id = "$row['id']"">update.'</td></tr>';
}
echo "</table>";
