<?php
include_once('MenuController.php');

if (empty($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<link rel="stylesheet" href="css/stylee.css">
<div class="header1">
		<div class="header1-middle">
			<img src="logo.png" id="logo">
		</div>
		<div class="header1-right">
			<ul class="header1-nav-right">
            <?php
                if($_SESSION['admin'] == 1){
                ?>
                    <li>
                        <a class="nav-link" href="menuDashboard.php">Dashboard</a>
                    </li>
                <?php
                }
            ?>
				<li><a href="index.html">home</a></li>
				<li><a href="shop.php">shop</a></li>
				<li><a href="aboutus.php">about</a></li>
				<li><a href="ContactUs.php">contact</a></li>
			</ul>
		</div>
	</div>