<?php
class OrderDetail extends Controller{
   function index(){
       $getOrderDetail = $this->model("OrderDetailModel");

       $this -> view('masterlayout',[
           "page" =>"OrderDetail",
            "order"=>$getOrderDetail->getOrderDetail()
       ]);
   }
 

}
