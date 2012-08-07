<?php
/*
	This is an alternate configuration file for legacy projects that won't immediately
	fit into the breakfast structure.
*/
	$clientName        = "CLIENT_NAME";
	$projectName       = "PROJECT_NAME";
	$subfolders        = 1; // 0 to hide subdirectories
	$projects          = 1; // 1 to create a projects directory (requires subfolders to be visible)
////////////////////////////////////////////////////////////////////////////////
	$projectLocation   = dirname(__FILE__) . '/';
	set_include_path ($projectLocation . '_inc/');
	$indexPath         = "/path/to/resources/inc/";
?>