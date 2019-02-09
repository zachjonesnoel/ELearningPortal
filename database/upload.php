<<?php  
	$link = mysqli_connect("localhost", "root", "", "elearning");

	$result = "";
	
	// Check connection
	if($link === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	} 
	
	$target_dir = "C:/wamp64/www/ELearning/PDF/";
	$target_file = $target_dir . $_POST["courseName"] . ".pdf";
	
	/*if (file_exists($target_file))
	{
		$result = $_POST["courseName"] . ".pdf" . " already exists. ";
	}
	else
	*/{
		move_uploaded_file($_FILES["PDFfile"]["tmp_name"], $target_file);
		
		// Insert into database
		$sql = "update course set pdf1 = '" . $_POST["courseName"] . "' where courseName = '" . $_POST["courseName"] . "'";
		$result = mysqli_query($link, $sql);    
		
		if($result)
		{
			$result = "Stored in: " . $_POST["courseName"] . ".pdf";
		}
		// close connection
		mysqli_free_result($result);
		mysqli_close($link);
	}
	
	header('Location: /ELearning/index.php?view=courseInfo&name=' . $_POST["courseName"] . '&result='. $result);	
?>