<?php
ob_start(); // Turns on output buffering
session_start();//we are using them to tell if the user logged in or not

date_default_timezone_set("Africa/Cairo");
//try connect database if any of that fails it going to catch
try {
    $con = new PDO("mysql:dbname=netflix;host=localhost", "root" , "");//root username "" pass
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>