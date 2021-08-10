<?php
class CategoriesModel extends DB{
    function getAllCategory(){
        $query = "SELECT * FROM categories";
        $this->setQuery($query);
        return  $this->fetchAll();
    }


}

?>