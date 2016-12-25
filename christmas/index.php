<?php
$dirname = "images/";
$images = glob($dirname."*.png");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}


?>