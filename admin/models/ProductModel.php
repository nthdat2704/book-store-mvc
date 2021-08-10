<?php
class ProductModel extends DB{
    function getProduct(){
        $query = "SELECT * FROM product";
        $this->setQuery($query);
        return $this->fetchAll();
    }
    function addProduct($name,$cateid,$price,$detail,$image,$anhien,$top){
        $query="INSERT INTO product(tenSP, gia, hinhanh, moTa, idLoai, anHien, top) values('$name', '$price', '$image', '$detail', '$cateid', '$anhien', '$top')";
        $this->setQuery($query);
        $this->insertData();
    }
    function editProduct($id,$name,$cateid,$price,$detail,$image,$anhien,$top){
        $query="update product set tenSP='".$name."', gia='".$price."', hinhanh='".$image."', moTa='".$detail."', idLoai='".$cateid."', anHien='".$anhien."', Top='".$top."' where idSP=".$id;
        $this->setQuery($query);
        $this->updateData();
    }
    function removeProduct($id){
        $query="delete from product where idSP=".$id;
        $this->setQuery($query);
        $this->deleteData();

    }
}


?>