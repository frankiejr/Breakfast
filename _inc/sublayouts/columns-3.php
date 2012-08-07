<?php //////////////////////////////////////////////////////////////////////////
$layoutName  = 'Standard Three Column';
include ('../config.php');
ob_start(); // Start to buffer page content
///////////////////////////////////////////////////////////////////////////// ?>
		<div id="padder">
			<div id="content">
<?php echo $content; ?>
			</div><!-- /content -->
		</div><!-- /padder -->
		<div id="aside">
<?php echo $aside; ?>
		</div><!-- /aside -->
		<div id="nav">
<?php
	$skipToNav  = true; // If #nav does not exist, change this value to false
	include('renderings/nav/nav-global.php');
	echo $nav;
?>
		</div><!-- /nav -->
<?php //////////////////////////////////////////////////////////////////////////
$intermediate = ob_get_contents(); // Store page content for master page
ob_end_clean(); // Stop buffering
include ('layouts/master.php');
///////////////////////////////////////////////////////////////////////////// ?>