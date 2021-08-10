<?php
class Home extends Controller{
    public $getCatagories;
    public $getProductById;
    function __construct(){
        $this->getCatagories = $this->model("CategoriesModel");
        $this->getProductById = $this->model("ProductModel");
    }
   function index(){

        $listCata = $this->getCatagories->getAllCategory();
        $listProductById =[];
        foreach ($listCata as $listCata) {
            extract($listCata);
            array_push($listProductById,$this->getProductById->loadProductById($idLoai));
        }
        $this -> view('masterlayout',[
            "page" =>"home",
            "categories" => $this->getCatagories->getAllCategory(),
            "productbyid" =>$listProductById
        ]);
   }



}



?>