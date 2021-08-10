<?php
class Product extends Controller
{
    public $getCatagories;
    public $getProductById;
    function  __construct()
    {
        $this->getCatagories = $this->model("CategoriesModel");
        $this->getProductById = $this->model("ProductModel");
    }


    function index()
    {

        $this->view('masterlayout', [
            "page" => "product",
            "categories" => $this->getCatagories->getAllCategory()
        ]);
    }
    function cart()
    {

        $this->view('masterlayout', [
            "page" => "cart",
            "categories" => $this->getCatagories->getAllCategory()
        ]);
    }
    function loadId($param)
    {

        $this->view('masterlayout', [
            "page" => "product",
            "productbyid" => $this->getProductById->loadProductById($param),
            "categories" => $this->getCatagories->getAllCategory()
        ]);
    }
}
