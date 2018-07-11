<?php if (isset($_SESSION['user']['username'])) { ?>
	<nav class="navbar-fluid">
			<div class="logo_div">
				<a href="index.php"><h1>Universe Blog</h1></a>
			</div>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="contact.php">Contact</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="logout.php">Log Out</a></li>
			  
			</ul>
		</nav>
<?php }else{ ?>
<nav class="navbar-fluid">
			<div class="logo_div">
				<a href="index.php"><h1>Universe Blog</h1></a>
			</div>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="contact.php">Contact</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="login.php">Log In</a></li>
			</ul>
		</nav>
		<?php } ?>