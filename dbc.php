<?php
// Connect to your database (replace these variables with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akkhorsms";

$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
