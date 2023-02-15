<?php

//This is for local connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "money_app_db";

//connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//testing connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
