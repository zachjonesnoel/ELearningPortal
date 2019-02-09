</div>
</div>
<link rel="stylesheet" href="css/footer.css" />
<br>
<br>
<?php
	for($i=0;$i<5;$i++)
		echo "<br>";
?>
<div class="large-12 columns footer">
	<div class="large-12 columns">
		<div class="small-4 columns">
			<ul><a href="?view=courses"><u>Courses</u></a>
				<a href="?view=HTMLpage"><li>HTML</li></a>
				<a href="?view=CSSpage"><li>CSS</li></a>
				<a href="?view=PHPpage"><li>PHP</li></a>
				<a href="?view=Rubypage"><li>Ruby on Rails</li></a>
				<a href="?view=Bootstrap"><li>Bootstrap</li></a>
			</ul>
		</div>
		<div class="small-4 columns">
			<ul><a href="?view=courses"><u>Courses</u></a>
				<li>Bootstrap</li>
				<li>CSS</li>
				<li>PHP</li>
				<li>Bootstrap</li>
			</ul>
		</div>
		<div class="small-4 columns">
			<ul><a href="?view=courses"><u>Courses</u></a>
				<a href="?view=C"><li>C</li></a>
				<a href="?view=Cpp"><li>C++</li></a>
				<a href="?view=Java"><li>Java</li></a>
				<a href="?view=Python"><li>Python</li></a>
			</ul>
		</div>
		
		
	</div>	
	<div class="large-12 columns">
		<div class="large-6 columns">
			<b>Contact us</b> <br>
			Address: E-Learning,Bangalore-560011.<br>
			Phone no: +91-98745-63210
		</div>

		<div class="large-6 columns">
			<b>Resources</b>
		</div>
	</div>


<div class="large-12 columns">
    <div>
        <?php echo "<p style='text-align:center;font-size:12px'>&copy E-Learning | " . date("Y") ."</p>"; ?>
    </div>
</div>
</div>
</div>

<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
