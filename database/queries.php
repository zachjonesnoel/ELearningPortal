<?php
	$link = mysqli_connect("localhost", "root", "", "elearning");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$comments = mysqli_real_escape_string($link, $_POST['comments']);
$page = mysqli_real_escape_string($link, $_POST['page']);

