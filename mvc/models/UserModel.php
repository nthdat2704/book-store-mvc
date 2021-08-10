<?php
class UserModel extends DB{

    function checkRegister($username){
        // $query = "SELECT * FROM users WHERE username=".$username;
        $query = "SELECT * FROM users WHERE username="."'$username'";
        $this->setQuery($query);
        return $this->checkUser();
        

    }

    function register($username, $password,$name,$email,$phonenumber){
        $query="insert into users(username, pass, hoTen, sdt, email) values('$username', '$password', '$name', '$phonenumber', '$email')";
        $this->setQuery($query);
        return $this->insertData();

    }
    function checkLogin($username,$password){
        $query = "select * from users where username = '$username' and pass = '$password'";
        $this->setQuery($query);
        return $this->fetchOne();
  
    }




}


?>