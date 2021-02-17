<?php
$conn = mysqli_connect('whatif.database.windows.net', 'tarek7669', 'Tt0105275971');

if (!$conn)
{
	echo "Not connected to server";
}

if (!mysqli_select_db($conn, 'WhatIf_database'))
{
	echo "Database not selected";
}

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$sql = "INSERT INTO person (Email, Name, Password) VALUES ('$email', '$name', '$password')";

if (!mysqli_query($conn, $sql))
{
	echo "Not inserted";
}
else
{
	echo "Inserted";
}

header("refresh:2; url = test.html");

?>