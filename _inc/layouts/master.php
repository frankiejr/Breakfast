<?php /*************************************************************************

Master Page Template
====================
Content from template is buffered into var=$pageContent, which is then echoed
into this master wrapper template.

This template returns an empty wrapper (only <html> & <body> tags) if $bodyClass
is "pageHome". This prevents the need for an additional master template.

Configuration options are in config.php, which is in the root directory for
this project.

*******************************************************************************/
include ('../config.php'); ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html lang="en" class="ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<title><?php echo $clientName; ?> - <?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Viridian Spark">
	<meta name="Robots" content="INDEX,FOLLOW">
	<link rel="shortcut icon" href="/images/favicon.gif" type="image/gif">
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
	<!--[if (gt IE 6)|!(IE)]><!--><link rel="stylesheet" href="/styles/global.css"><!--<![endif]-->
	<link rel="stylesheet" media="print" href="/styles/print.css"><?php if ($headerExtras) {echo "\n" . $headerExtras . "\n";} ?>
</head>
<?php
		// If there is a body class, insert it into the <body> tag
		if ($bodyClass) {
			echo "<body class=\"" . $bodyClass . "\">";
		} else {
			echo '<body>';
		};
?>

	<div id="masthead" class="wrap">
		<h1 id="site-logo"><?php if ($bodyClass != 'page-home') {echo "<a href=\"/\" title=\"<?php echo $clientName; ?>\">";} ?><img src="/styles/images/structure/logo-print.gif" border="0" alt="<?php echo $clientName; ?>"><?php if ($bodyClass != 'page-home') {echo "</a>";} ?></h1>
<?php
	// If $skipToNav is not false, show an accessibility link to navigation
	if ( !$skipToNav  || $skipToNav != false ) {
		echo '		<a class="accessibility" href="#nav">Skip to Navigation</a>';
	};
?>

	</div><!-- /#masthead.wrap -->
	<div id="container" class="wrap">
<?php // echo $pageContent; ?>
<?php echo $intermediate; ?>
	</div><!-- /#container.wrap -->
	<div id="footer" class="wrap">
		footer
	</div><!-- /#footer.wrap -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="/scripts/jquery-1.7.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="/scripts/library.js"></script><?php if ($footerExtras) {echo "\n" . $footerExtras;} ?>

</body>
</html>