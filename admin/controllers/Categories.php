<?php
class Categories extends Controller{
    function index(){
        $getCatagories = $this->model("CategoriesModel");
        $this -> view('masterlayout',[
            "page" =>"categories",
            "categories" => $getCatagories->getAllCategory()
        ]);
    }
    function addCategories(){
        if(isset($_POST["addCategories-btn"])){
            $name = $_POST["name"];
            $anhien = $_POST["anhien"];
            $addcategories = $this->model("CategoriesModel");
            $addcategories->addCategories($name,$anhien);
            header("Location:/asm/admin/categories");
        }
    }
    function removeCategories($param){
        $removeCategories = $this->model("CategoriesModel");
        $removeCategories -> removeCategories($param);
        header("Location:/asm/admin/categories");

    }
    function editCategories(){
        if(isset($_POST['editProduct-btn'])){
            $id = $_POST['id'];
            $name = $_POST["name"];
            $anhien = $_POST["anhien"];
            $editCategories = $this->model("CategoriesModel");
            $editCategories->editCategories($id,$name,$anhien);
            header("Location:/asm/admin/categories");
    
        }
    }
    

}



?>