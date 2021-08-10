<?php
class ProductModel extends DB{
    function loadProductById($id){
        $query = "SELECT * FROM product where idLoai=".$id;
        $this->setQuery($query);
        return $this->fetchAll();
  
    }
    function loadAllProduct(){
        $query = "SELECT * FROM product";
        $this->setQuery($query);
        return $this->fetchAll();
        
    }


}


?>