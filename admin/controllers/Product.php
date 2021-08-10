<?php
class Product extends Controller{
   function index(){
       $getproduct = $this->model("ProductModel");
       $getCatagories = $this->model("CategoriesModel");

     
       $this -> view('masterlayout',[
           "page" =>"product",
           "product" =>  $getproduct->getProduct(),
           "categories" => $getCatagories->getAllCategory()
       ]);
   }
   function addProduct(){
       if(isset($_POST['addProduct-btn'])){
           $name = $_POST["name"];
           $cateid = $_POST["cateid"];
           $price = $_POST["price"];
           $detail = $_POST["detail"];
           $image = $_POST["image"];
           $anhien = $_POST["anhien"];
           $top = $_POST["top"];
           $addproduct = $this->model("ProductModel");
           $addproduct->addProduct($name,$cateid,$price,$detail,$image,$anhien,$top);
           header("Location:/asm/admin/product");

       }


   }
   function editProduct(){
    if(isset($_POST['editProduct-btn'])){
        $id = $_POST['idsp'];
        $name = $_POST["name"];
        $cateid = $_POST["cateid"];
        $price = $_POST["price"];
        $detail = $_POST["detail"];
        $image = $_POST["image"];
        $anhien = $_POST["anhien"];
        $top = $_POST["top"];
        $editproduct = $this->model("ProductModel");
        $editproduct->editProduct($id,$name,$cateid,$price,$detail,$image,$anhien,$top);
        header("Location:/asm/admin/product");

    }

   }
   function removeProduct($param){
       $deleteproduct = $this -> model("ProductModel");
       $deleteproduct->removeProduct($param);
       header("Location:/asm/admin/product");

   }
 

}



?>