<?php
require_once 'MenuController.php';
include 'nav.php'
?>
<link rel="stylesheet" href="css/style.css">
<div>
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo 
        '<div class="gallery">
            <div class="content">
                <img id="img" src="' .$all[$i] ['menu_image'].'"> 
                <h3 id="h3">' .$all[$i]['menu_title'].'</h3>
                <p id="p">' .$all[$i]['menu_body']. '</p>
            </div>
        </div>';
    }
    ?>
</div>