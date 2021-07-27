<?php
include dirname(__DIR__)."/Models/DBConnect.php";

class ProductModels extends DBConnect
{
    var $bookID;
    var $categoryID;
    var $bookName;
    var $description;

    public function __construct($id, $cateID, $name, $descrip)
    {
        $this->bookID = $id;
        $this->categoryID=$cateID;
        $this->bookName = $name;
        $this->description = $descrip;
    }
    //create
    static public function add($product){
        $db = static::_connect();
        $sql ="INSERT INTO books (categoryID, bookName, description) VALUES ('" .$product->categoryID . "' ,'" . $product->bookName . "' , '" . $product->description . "')";

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
    static public function update($product){
        $db = static::_connect();
        $sql ="UPDATE books SET categoryID ='" . $product->categoryID . "', '" . $product->bookname . "', '" . $product->description . "' WHERE bookID=.$product->bookID.";

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
        $sql ="DELETE FROM books WHERE bookID=$id";
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
        $sql ="SELECT * FROM books";
        $result = $db->query($sql);
        $listResult = [];

        if ($result->num_rows >0){
            // output data of each row
            while ($row = $result->fetch_assoc()){
                $listResult[] = new ProductModels($row['bookID'], $row['categoryID'], $row['bookName'], $row['description']);
            }
        }

        $db->close();
        return $listResult;
    }
    //Find
    static public function find($id){
        $db = static::_connect();
        $sql ="SELECT * FROM books WHERE bookID=$id";
        $result = $db->query($sql);
        $listResult = null;

        if ($result->num_rows > 0){
            // output data of each row
            while ($row = $result->fetch_assoc()){
                $listResult[] = new ProductModels($row['bookID'], $row['categoryID'], $row['bookName'], $row['description']);
            }
        }

        $db->close();
        return $listResult;
    }
    static public function findCategory($categoryID){
        $db = static::_connect();
        $sql ="SELECT categoryName FROM categories WHERE categoryID=$categoryID";
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