<?php
$valid_user = "kanth";
$valid_pass = "14225";

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == $valid_user && $password == $valid_pass) {
  echo "<h2>Welcome, $username!</h2>";
} else {
  echo "<h2>Login failed. Try again.</h2>";
}
?>