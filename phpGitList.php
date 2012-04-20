<?php

	/*
	 * 	Name: phpGitList
	 * 
	 *  Author:		Zach "MisutoWolf" Baker
	 * 	Created:	April 20, 2012
	 * 	Function:	This script/function will make use of a library called
	 * 				'php-github-api' (by ornicar) to produce style-able
	 * 				unordered lists of GitHub repositories for use with 
	 * 				things like WordPress.
	 */ 				

	/*
	 *  In theory, the required library will be autoloaded by PHP through
	 *  required means.   If not, uncomment this line and point it to the
	 *  autoloader script, so everything gets loaded properly.
	 */
	 
	 // require_once('/path/to/library/Autoloader.php);
	 
	 /*  
		 *  First, we'll get some login information from a config file
		 * 	You'll want to change the path to match your location, mine 
		 *  is above web root for security/safety.
		 */ 
		 
	$config_path = $_SERVER['DOCUMENT_ROOT'] . "/../pGLconfig.inc";
	require_once($config_path);
	
	function phpGitList($username) {
		
		
		
	}

?>
