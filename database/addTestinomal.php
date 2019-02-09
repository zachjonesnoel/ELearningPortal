<?php
	$link = mysqli_connect("localhost", "root", "", "elearning");
 
			// Check connection
			if($link === false){
    			die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	$test=$_POST['testimony'];

	if(isset($_SESSION["username"]))
	{
		$sql="insert into testimony(username,testimony) values ('".$_SESSION['username']."','".$test."')";
		$result=mysqli_query($link,$sql);
		if($result)
			//include '/ELearning/index.php?view=testimony';
			echo "added";
		else
			printf("Error: %s\n", mysqli_error($link));

	}

?>