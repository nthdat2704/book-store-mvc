<?php
class User extends controller{
    function index(){
        $getUser = $this->model("UserModel");
        $this->view("masterlayout",[
            "page"=>"User",
            "user"=>  $getUser->getUser()
        ]);

    }
 
    function addUser(){
        if(isset($_POST["adduser-btn"])){
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            $hoTen = $_POST["hoTen"];
            $sdt = $_POST["sdt"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $ngay = $_POST["ngay"];
            $anHien = $_POST["anHien"];
            $addUser = $this->model("UserModel");
            $addUser -> addUser($username,$pass,$hoTen,$sdt,$email,$role,$ngay,$anHien);
            header("Location:/asm/admin/user");
        }
    }
    function editUser(){
        if(isset($_POST['edituser-btn'])){
            $iduser = $_POST['iduser'];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hoten = $_POST["hoten"];
            $sdt = $_POST["sdt"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $date = $_POST["date"];
            $anhien = $_POST["anhien"];

            $editUser = $this->model("UserModel");
            $editUser->editUser($iduser,$username,$password,$hoten,$sdt,$email,$role,$date,$anhien);
            header("Location:/asm/admin/user");
    
        }
    
       }
    function removeUser($param){
        $deleteproduct = $this -> model("UserModel");
        $deleteproduct->removeUser($param);
        header("Location:/asm/admin/user");
 
    }
}
