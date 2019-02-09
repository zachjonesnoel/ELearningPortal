<?php

session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "elearning");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
 
// attempt insert query execution
$sql = 'select * from faculty where UserName = "' . $username . '" and Password = "' . $password . '"';

$result = mysqli_query($link, $sql);

$response = "0";    
if(mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_row($result)) {
        
        $_SESSION["loggedIn"] = "true";
        $_SESSION["type"] = "faculty";
        $_SESSION["username"] = $username;
    
    }
    
    /* free result set */
    mysqli_free_result($result);
    echo print_r($_SESSION);
    $response = "1";
    
} else{
    $response = "0";
}
 
// close connection
mysqli_free_result($result);
mysqli_close($link);

if($response==1)
    header('Location: /ELearning/index.php?view=fhomepage' . '&response=' . $response.'&username='.$username);
else
    header('Location: /ELearning/index.php?view=home');
//echo $header;//echo $header;


//header('Location:?view=homepage');
//header('Location:'.view=homepage.'&response'.$response);
?>