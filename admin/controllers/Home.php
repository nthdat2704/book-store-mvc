<?php
class Home extends Controller{
    function index(){
        $this -> view('masterlayout',[
            "page" =>"home"
        ]);
    }
    // function index(){
    //     $this -> view('masterlayout',[
    //         "page" =>"home"
    //     ]);
    // }


}



?>