<?php
class User extends Controller{
    function index(){

        $getCatagories = $this->model("CategoriesModel");
        $this -> view('masterlayout',[
            "page" =>"login",
            "categories" => $getCatagories->getAllCategory()
        ]);
   }
   function checklogin(){
        $checklogin = $this->model("UserModel");
       if(isset($_POST["login-submit-btn"])){
        trim($username = $_POST["username"]);
            $password = $_POST["password"];
            $result = $checklogin ->checkLogin($username,$password);
            if($result!=""){
                $_SESSION["user"] = $result;
                header("Location:/asm/home");
            }
            else{
                $getCatagories = $this->model("CategoriesModel");
                $this -> view('masterlayout',[
                    "page" =>"login",
                    "categories" => $getCatagories->getAllCategory(),
                    "thongbao" => "Sai tài khoản hoặc mật khẩu"
                ]);

            }
       }
   }
   function logout(){
       unset($_SESSION["user"]);
       header("Location:/asm/home");

   }


   function register(){
    $getCatagories = $this->model("CategoriesModel");
    $this -> view('masterlayout',[
        "page" =>"register",
        "categories" => $getCatagories->getAllCategory()
    ]);

   }
   function checkRegister(){
    if(isset($_POST["register-submit"])){
        trim($username = $_POST["username"]);
        $password = $_POST["password"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $register = $this->model("UserModel");
        $result = $register ->checkRegister($username);

        if($result>0){
            $getCatagories = $this->model("CategoriesModel");
            $this -> view('masterlayout',[
                "page" =>"register",
                "categories" => $getCatagories->getAllCategory(),
                "thongbao" => "Tài khoản đã tồn tại"
            ]);
        
        }
        else{
            $register->register($username,$password,$name,$email,$phonenumber);
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="/asm/home";</script>';
        }
    }
   }
   
}
