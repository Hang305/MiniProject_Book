<?php
include dirname(__DIR__)."/Models/DBConnect.php";

class CategoryModels extends DBConnect
{
    var $categoryID;
    var $categoryName;

    public function __construct($id, $name)
    {
        $this->categoryID = $id;
        $this->categoryName=$name;
    }
    //create
    static public function add($category){
        $db = static::_connect();
        $sql ="INSERT INTO categories (categoryName) VALUES ('" .$category->categoryName . "')";

        $result = true;
        if ($db->query($sql) === TRUE){
            $result = true;
        }
        else {
            $result = false;
            throw new exception("Error:" . $sql . "<br>" . $db->error);
        }
        return $result;
    }

    //update
    static public function update($category){
        $db = static::_connect();
        $sql ="UPDATE categories SET categoryName ='" . $category->categoryName . "' WHERE categoryID=$category->categoryID ";

        $result = true;
        if ($db->query($sql) === TRUE){
            $result = true;
        }
        else {
            $result = false;
            throw new exception("Error:" . $sql . "<br>" . $db->error);
        }
        return $result;
    }
    //Delete
    static public function delete($id){
        $db = static::_connect();
        $sql ="DELETE FROM categories WHERE categoryID=$id";

        $result = true;
        if ($db->query($sql) === TRUE){
            $result = true;
        }
        else {
            $result = false;
            throw new exception("Error:" . $sql . "<br>" . $db->error);
        }
        return $result;
    }
    //GetAll
    static public function getAll(){
        $db = static::_connect();
        $sql ="SELECT * FROM categories";
        $result = $db->query($sql);
        $listResult = [];

        if ($result->num_rows >0){
            // output data of each row
            while ($row = $result->fetch_assoc()){
                $listResult[] = new CategoryModels($row['categoryID'], $row['categoryName']);
            }
        }

        $db->close();
        return $listResult;
    }
    //Find
    static public function find($id){
        $db = static::_connect();
        $sql ="SELECT * FROM categories WHERE categoryID=$id";
        $result = $db->query($sql);
        $listResult = null;

        if ($result->num_rows > 0){
            // output data of each row
            while ($row = $result->fetch_assoc()){
                $listResult[] = new CategoryModels($row['categoryID'], $row['categoryName']);
            }
        }

        $db->close();
        return $listResult;
    }

}