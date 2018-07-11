<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Welcome <?php echo $_SESSION['user']['first_name'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
<div class="jumbotron jumbotron-fluid">

	<!-- <div  class="welcome_msg ">
    
    <p > The universe is under no obligation to make sense to you. </br>
                <span>- Neil DeGrasse Tyson</span>
                
    </p>
		
	</div> -->
	
</div>
<?php } ?>