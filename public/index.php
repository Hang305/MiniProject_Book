<?php
$_GET['url'];
switch ($_GET["url"]) {
	case "":
	case "dashboard":
	$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
	require_once $root."app/Controllers/DashboardController.php";
	$new = new DashboardController();
	$new->dashboard();
		break;
	

	default:
		// code...
	include_once "./404.php";
		break;
}
?>

