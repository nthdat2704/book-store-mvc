<?php
class App{
    protected $controller =  "Home";
    protected $action =  "index";
    protected $param = [];
    protected $url = "";

    function __construct(){
        $arr = $this->UrlProcess();

        if(file_exists("./mvc/controllers/".$arr[0])){ // kiểm tra có tồn tại folder ko
            // nếu như tồn tại thì lấy controller đó check tiếp
            
            if(file_exists("./mvc/controllers/admin/".$arr[0].".php")){
                $this->controller =$arr[0];
                $this->url="admin/";

            }
        }
    // kiểm tra có tồn tại folder ko
            // nếu như tồn tại thì lấy controller đó check tiếp
            if(file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller =$arr[0];
                $this->url="";
                unset($arr[0]);
            }
            unset($arr[0]);

        


  
      

        require_once("./mvc/controllers/$this->url".$this->controller.".php");
        $this->controller = new $this->controller;
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
        
                $this->action = $arr[1];
            }
    
            unset($arr[1]);


        }
        $this->param = $arr?array_values($arr):[];

        call_user_func_array([$this->controller,$this->action],$this->param);
  

    }
    function UrlProcess(){
        if(isset( $_GET['url'])){
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
     
    }
}



?>