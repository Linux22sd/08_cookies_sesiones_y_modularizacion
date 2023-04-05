<?php
$page = $_GET["page"]?? null;

switch ($page) {
    case 'contact':
        require "pages/contact.php";
        break;
    case 'services':
        require "pages/services.php";
        break;
    case 'home':
        require "pages/home.php";
        break;
    default:
        require "pages/nofound.php";
        break;
}
?>
