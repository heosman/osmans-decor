<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case 'index.php':
        $title = "Osman's Decor - Home";
        $PageID = "Home";
    break;

    case 'gallery.php':
        $title = "Osman's Decor - Gallery";
        $PageID = "Gallery";
    break;

    case 'details.php':
        $title = "Osman's Decor - Details";
        $PageID = "Details";
    break;

    case 'about.php':
        $title = "Osman's Decor - About";
        $PageID = "About Eydrus";
    break;

    case 'contact.php':
        $title = "Osman's Decor - Contact";
        $PageID = "Contact Eydrus";
    break;

    default:
        $title = THIS_PAGE;
        $PageID = "Home";
   }
    
?>

