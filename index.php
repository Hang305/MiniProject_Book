<?php

switch ($_GET['url']) {
	case "":
	case "dashboard":
	$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
	require_once $root."app/Controllers/DashboardController.php";
	$new = new DashboardController();
	$new->dashboard();
		break;
		//category
	case "category":
	case "category/":
	case "category/index":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$new = new CategoryController();
		$new->index();
		break;
		//CREATE
	case "category/create":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$new = new CategoryController();
		$new->create();
		break;
		//STORE
	case "category/store":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new CategoryController();
			$new->store($_REQUEST);
		}
		else{
			include_once "./404.php";
		}
		break;

	//EDIT
	case "category/edit":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if (!empty($_GET['categoryID'])){
			$categoryID = $_GET['categoryID'];
		}
		$new = new CategoryController();
		$new->edit($categoryID);
		break;

		//UPDATE
	case "category/update":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new CategoryController();
			$new->update($_REQUEST, $_GET['categoryID']);
		}
		else{
			include_once "./404.php";
		}
		break;

		//DELETE
	case "category/delete":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/ProductController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new CategoryController();
			$new->delete($_GET['categoryID']);
		}
		else{
			include_once "./404.php";
		}
		break;
	//product-----------------------------------------------------------------------------------
	case "product":
	case "product/":
	case "product/index":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
	require_once $root."/app/Controllers/ProductController.php";
		$new = new ProductController();
		$new->index();
		break;
	//CREATE
	case "product/create":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/ProductController.php";
		$new = new ProductController();
		$new->create();
		break;
	//STORE
	case "product/store":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/ProductController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new ProductController();
			$new->store($_REQUEST);
		}
		else{
			include_once "./404.php";
		}
		break;

	//EDIT
	case "product/edit":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/ProductController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if (!empty($_GET['bookID'])){
			$bookID = $_GET['bookID'];
		}
		$new = new ProductController();
		$new->edit($bookID);
		break;

	//UPDATE
	case "product/update":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/ProductController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new ProductController();
			$new->update($_REQUEST, $_GET['bookID']);
		}
		else{
			include_once "./404.php";
		}
		break;

	//DELETE
	case "product/delete":
		$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
		require_once $root."/app/Controllers/CategoryController.php";
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST"){
			$new = new ProductController();
			$new->delete($_GET['bookID']);
		}
		else{
			include_once "./404.php";
		}
		break;
	default:

		include_once "./404.php";
		break;
}
?>

