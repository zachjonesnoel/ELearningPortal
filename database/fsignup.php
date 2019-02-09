<?php
//session_start();

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
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = $_POST['phone'];
 
// attempt insert query execution

//$sql="select * from students where UserName=$username";

//$result=mysqli_query($link,$sql);

//if(!$result)
{    
    $sql = "insert into faculty(FirstName, LastName, UserName, EmailID, Password) values ('".$firstname."','".$lastname."','".$username."','".$email."','".$password."')";

//echo "$username, $password, $firstname, $lastname, $email,$phone";    

    $result = mysqli_query($link, $sql);    

    $response = 0;   
    if($result)
        $response=1; 
}
// close connection
mysqli_free_result($result);
mysqli_close($link);




header('Location: /ELearning/index.php?view=faculty'.'&response='.$response.'&username='.$username);
//echo $header;


//header('Location:?view=homepage');
//header('Location:'.view=homepage.'&response'.$response);
?>