<?php

//This is for local connection
$dbname = "localhost";
$dbuser = "root";
$dbpass = "";

//connection
$conn = mysqli_connect($dbname, $dbuser, $dbpass);

//testing connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
