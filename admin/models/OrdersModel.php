<?php
class OrdersModel extends DB{
    function getOrders(){
        $query = "SELECT * FROM bill";
        $this->setQuery($query);
        return  $this->fetchAll();
    }
    function editOrder($idBill,$status){
        $query="update bill set billstatus='".$status."' where idBill=".$idBill;
        $this->setQuery($query);
        $this->updateData();
    }
   


}

?>