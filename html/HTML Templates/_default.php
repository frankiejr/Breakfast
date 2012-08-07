<?php
$pageTitle  = 'Master Template';
$bodyClass  = '';
$navItem    = 'btn-global-2';
$level      = 2;           // Depth of lower level page. Default is 2
$headerExtras = '';        // Inserted at the very end of the <head> tag
$footerExtras = '';        // Inserted at the very end of the <body> tag
include ('../../config.php');
ob_start(); // Begin Page Content /////////////////////////////////////////// ?>
<?php include ('content/content-styles.php') ?>

<?php $content = ob_get_contents(); ob_end_clean(); // End Page Content ////////
ob_start(); // Begin Aside ////////////////////////////////////////////////// ?>
<?php include ('renderings/modules/mod-test.php') ?>

<?php $aside = ob_get_contents(); ob_end_clean(); // End Aside /////////////////
ob_start(); // Begin Navigation ///////////////////////////////////////////// ?>

<?php include ('renderings/nav/nav-local.php') ?>

<?php $nav = ob_get_contents(); ob_end_clean(); // End Navigation //////////////
include ('sublayouts/columns-3.php'); ///////////////////////////////////// ?>