<?php
function active_link($link){
    if (basename($_SERVER['SCRIPT_FILENAME'])==$link)  
        echo " class ='active'";
};
?>
<ul class="menu">
    <li><a <?php active_link("index.php")?> href="index.php">Home</a></li>
    <li><a <?php active_link("services.php")?> href="services.php">Services</a></li>
    <li><a <?php active_link("about.php")?> href="about.php">About Us</a></li>
    <li><a <?php active_link("contact.php")?> href="contact.php">Contact Us</a></li>
</ul>

