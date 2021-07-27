
<?php 
$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
require_once $root."/app/Models/CategoryModels.php";
 /**
  * 
  */
 class DashboardController 
 {
 	
 	public function dashboard(){
 		 try {
 		 	$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject/";
 		 	require_once $root."app/Views/Admin/dashboard.php";

 		 }
 		 catch(throwable $th){
             echo $th->getMessage();
         }
 	}
 }
?>