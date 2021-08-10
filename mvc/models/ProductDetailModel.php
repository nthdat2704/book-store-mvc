<?php
class ProductDetailModel extends DB{

    function getDetailProduct($id){
        $query = "SELECT * FROM product where idSP=".$id;
        $this->setQuery($query);
        return $this->fetchOne();

    }


}


?>



