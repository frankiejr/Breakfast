<?php include ('config.php'); ob_start(); // Start buffering content //////// ?>

<p>&nbsp;</p>

<?php //////////////////////////////////////////////////////////////////////////
$indexContent = ob_get_contents(); // For master page
ob_end_clean(); // Stop buffering
set_include_path ($indexPath);
include ('functions.php');
include ('top.php');
echo $indexContent;
include ('btm.php');
///////////////////////////////////////////////////////////////////////////// ?>