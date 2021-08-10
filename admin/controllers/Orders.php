<?php
class Orders extends Controller{
   function index(){
       $getmodel  = $this->model("OrdersModel");

       $this -> view('masterlayout',[
           "page" =>"Orders",
           "orders" => $getmodel->getOrders()
       ]);
   }
   function editOrder(){
    if(isset($_POST['edit-btnsubmit'])){
        $idBill = $_POST['idBill'];
        $status = $_POST["status"];
      

        $editOrder = $this->model("OrdersModel");
        $editOrder->editOrder($idBill,$status);
        header("Location:/asm/admin/orders");

    }

   }
 

}



?>