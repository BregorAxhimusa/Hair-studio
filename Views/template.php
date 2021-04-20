<?php

if (isset($_GET['route'])) {
	if(
		$_GET['route'] == "404front" 							||
		$_GET['route'] == "index" 						
	  ){
	// Header frronti
		include("includes/header-front.php");
		include("modules/".$_GET['route'].".php");
		include("includes/footer-front.php");
	// Footer
	  }

	else if (
		$_GET['route'] == 'cms' 					 			||
		$_GET['route'] == 'dashboard' 							||
		$_GET['route'] == 'profile' 							||
		$_GET['route'] == 'images' 								||
		$_GET['route'] == 'notification' 						||
		$_GET['route'] == 'account-settings' 					||
		$_GET['route'] == 'users' 								||
		$_GET['route'] == 'clients' 							||
		$_GET['route'] == 'working' 							||
		$_GET['route'] == 'prices' 								||
		$_GET['route'] == '404'
	) {

		include("Views/includes/header.php");
		include("modules/".$_GET['route'].".php");
		include("Views/includes/footer.php");

	}
	else if(
		$_GET['route'] == 'login' ||
		$_GET['route'] == 'forget-password'
	
	) {
		include("Views/modules/Login/login-header.php");
		include("Views/modules/Login/" . $_GET['route'] . ".php");
		include("Views/modules/Login/login-footer.php");
	}
	else {

		include("Views/modules/404.php");
	}

} else {
	include("Views/includes/header.php");
	include("modules/dashboard.php");
	include("Views/includes/footer.php");

}

?>