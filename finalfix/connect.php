<?php
session_start();


// initializing variables
$username = "";
$name="";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'practice');

?>