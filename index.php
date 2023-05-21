<?php

$page = $_GET['page'] ?? 'home';

if ($page == 'about'){
    include 'controller/aboutPage.php';
} else if($page == 'contact'){
    include 'controller/contactPage.php';
} else {
    include 'controller/homePage.php';
}



