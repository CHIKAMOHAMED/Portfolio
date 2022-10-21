<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "data";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

$datetime  = date("Y-m-d");
$email=$_POST['email'];
$req = "INSERT INTO newsletter (email, datetime) VALUES ('$email', '$datetime')";
$result = $conn->query($req);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
header("Location: index.html");
?>