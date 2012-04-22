<?php 

	// Test case for this github stuff.
	$gh_api = $_SERVER['DOCUMENT_ROOT'] . "/lib/Autoloader.php";
	require_once($gh_api);
	Github_Autoloader::register();
	
	$gh = new Github_Client();
	$repo = $gh->getRepoApi()->GetUserRepos('mcgrew');
	
	var_dump($repo);

?>
