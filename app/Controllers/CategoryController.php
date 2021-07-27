<?php
$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
require_once $root."/app/Models/CategoryModels.php";

class CategoryController
{
    //Show
    public function index(){
        try {
            $listCategory = CategoryModels::getAll();
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            require_once $root."/app/Views/Admin/category/index.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //Create
    public function create(){
        try {
            $listCategory = CategoryModels::getAll();
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            require_once $root."/app/Views/Admin/category/create.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //store
    public function store($request){
        try {
            $new_category = new CategoryModels(null,$request['categoryName']);
            $res = CategoryModels::add($new_category);
            $reponse =[
                'status' => 'success',
                'message' =>'Add successfully'
            ];
            if (!$res){
                $reponse = [
                    'status'=> 'danger',
                    'message'=> 'Add error'
                ];
            }
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            require_once $root."/app/Views/Admin/category/create.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //edit
    public function edit($id){
        try {
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            $category = CategoryModels::find($id);
            $listCategory = CategoryModels::getAll();
            if ($category == null){
                require_once $root."/404.php";
            }
            require_once $root."/app/Views/Admin/category/edit.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //update
    public function update($request,$id){
        try {
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            $updateCategory = new CategoryModels($id,$request['categoryName']);
            $res = CategoryModels::update($updateCategory);
            $listCategory = CategoryModels::getAll();

            $reponse =[
                'status' => 'success',
                'message' =>'Update successfully'
            ];
            $category = CategoryModels::find($id);
            if (!$res){
                $reponse = [
                    'status'=> 'danger',
                    'message'=> 'Update error'
                ];
            }
            require_once $root."/app/Views/Admin/category/edit.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //delete
    public function delete($id){
        try {
            $res = CategoryModels::delete($id);
            $response = [
                'status'=> 'danger',
                'message'=> 'Delete successfully'
            ];
            if (!$res){
                $reponse = [
                    'status'=> 'danger',
                    'message'=> 'Delete error'
                ];
            }
            header("location: http://localhost/MiniProject/category");
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }

}