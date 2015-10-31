<?php
$servername = "localhost";
$username = "root";
$password = "afm";
$database = "dev";


// Create connection

$conn = odbc_connect("Driver={MySQL ODBC 5.3 ANSI Driver};Server=$servername;Database=$database;", $username, $password);

// Check connection
if ($conn) {
    echo "Connection established.<br><br>";
} else{
    die("Connection could not be established.<br><br>");
}
?>