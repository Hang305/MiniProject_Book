<?php
$root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
require_once $root."/app/Models/ProductModels.php";


class ProductController
{
//Show
    public function index(){
        try {
            $listProduct = ProductModels::getAll();
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            require_once $root."/app/Views/Admin/product/index.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //Create
    public function create(){
        try {
            $listProduct = ProductModels::getAll();
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            require_once $root."/app/Views/Admin/product/create.php";

        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //store
    public function store($request){
        try {
            $category = CategoryModels::getAll();
            $new_product = new ProductModels(null,$category, $request['bookName'], $request['description']);
            $res = ProductModels::add($new_product);
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
            require_once $root."/app/Views/Admin/product/create.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //edit
    public function edit($id){
        try {
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";

            $product = ProductModels::find($id);
            $category = ProductModels::findCategory($product->categoryID);

            $listProduct = ProductModels::getAll();
            if (product == null){
                require_once $root."/404.php";
            }
            require_once $root."/app/Views/Admin/product/edit.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //update
    public function update($request,$id){
        try {
            $root = $_SERVER['DOCUMENT_ROOT']."/MiniProject";
            $category = ProductModels::findCategory($product->categoryID);
            $new_product = new ProductModels(null,$request['$category'], $request['bookName'], $request['description']);
            $res = ProductModels::update($new_product);
            $listProduct = ProductModels::getAll();

            $reponse =[
                'status' => 'success',
                'message' =>'Update successfully'
            ];
            $category = ProductModels::find($id);
            if (!$res){
                $reponse = [
                    'status'=> 'danger',
                    'message'=> 'Update error'
                ];
            }
            require_once $root."/app/Views/Admin/product/edit.php";
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
    //delete
    public function delete($id){
        try {
            $res = ProductModels::delete($id);
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
            header("location: http://localhost/MiniProject/product");
        }
        catch (\Throwable $th){
            echo $th->getMessage();
        }
    }
}