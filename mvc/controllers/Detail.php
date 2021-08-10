<?php
class Detail extends Controller{
    public $getCatagories;
    public $getdetail;
    function __construct(){
        $this->getCatagories = $this->model("CategoriesModel");
        $this->getdetail = $this->model("ProductDetailModel");

    }
    function index(){

            $this -> view('masterlayout',[
            "page" =>"detail",
            "categories" => $this->getCatagories->getAllCategory()
        ]);
   }
   function detailproduct($param){
 
       $this -> view('masterlayout',[
        "page" =>"detail",
        "datadetail" => $this->getdetail ->getDetailProduct($param),
        "categories" => $this->getCatagories->getAllCategory()
   
    ]);

   }

}



?>