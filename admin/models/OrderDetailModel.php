<?php
class OrderDetailModel extends DB{
    function getOrderDetail(){
        $query = "SELECT * FROM cart";
        $this->setQuery($query);
        return $this->fetchAll();
        
    }
}

?>