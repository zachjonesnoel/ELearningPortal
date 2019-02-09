<link type="text/css" rel="stylesheet" href="css/menu.css"/>
    <p class="right">
    
    <div class="large-12 columns menubar">

    <?php
    
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "true") {
        echo '
		<a href="?view=homepage">
			<div class="large-4 columns panel button">
                <h6>Home</h6>
			</div> 
		</a>
		<a href="?view=courses">
			<div class="large-4 columns panel button">
                <h6>Courses</h6>
			</div> 
		</a>
		<a href="?view=signout">
			<div class="large-4 columns panel button">
            	<h6>Signout</h6>
			</div>
		</a>';    
    
	}
    else {
        echo '<a href="?view=about"><div class="large-2 columns panel button">
				<h6>About Us</h6>
        </div></a> 
		<a href="?view=testimonals">
			<div class="large-3 columns panel button">
                <h6>Testimonials</h6>
			</div>
        </a>
		<a href="?view=courses">
			<div class="large-2 columns panel button">
                <h6>Courses</h6>
			</div>
        </a>
		<a href="?view=contactUs">
			<div class="large-2 columns panel button">
                <h6>Contact Us</h6>
			</div>
        </a>
		<a href="?view=gettingStarted">
			<div class="large-3 columns panel button">
                <h6>Getting Started</h6>
			</div>
        </a>';    
    }

    ?>
    
    </div>
	</p>
</div>
</div>