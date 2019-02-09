<?php include 'header.php';?>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
<?php 
	$requestedPage="";
	if(isset($_GET["view"]))
		$requestedPage=$_GET["view"];
	else
		$requestedPage="home";
	
    echo '<div class="row">';
	include 'view/' . $requestedPage . '.php';
    echo '</div>';
?>

<?php include 'footer.php';?>