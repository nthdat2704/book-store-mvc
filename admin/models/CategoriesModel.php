<?php
class CategoriesModel extends DB{
    function getAllCategory(){
        $query = "SELECT * FROM categories";
        $this->setQuery($query);
        return  $this->fetchAll();
    }
    function addCategories($name,$anhien){
        $query="INSERT INTO categories(tenLoai, anHien) values('$name', '$anhien')";
        $this->setQuery($query);
        $this->insertData();
    }
    function removeCategories($id){
        $query="delete from categories where idLoai=".$id;
        $this->setQuery($query);
        $this->deleteData();


    }
    function editCategories($id,$name,$anhien){
        $query="update categories set tenLoai='".$name."', anHien='".$anhien."' where idLoai=".$id;
        $this->setQuery($query);
        $this->updateData();

    }
   


}

?>