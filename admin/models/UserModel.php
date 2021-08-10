<?php
class UserModel extends DB{
    function getUser(){

        $query = "SELECT * FROM users";
        $this->setQuery($query);
        return $this->fetchAll();

    }
    function addUser($username,$pass,$hoTen,$sdt,$email,$role,$ngay,$anHien){
        $query="INSERT INTO users(userName, pass, hoTen, sdt, email, role, ngay, anHien) values('$username', '$pass', '$hoTen', '$sdt', '$email', '$role', '$ngay', '$anHien')";
        $this->setQuery($query);
        return $this->insertData();
    }
    function editUser($iduser,$username,$password,$hoten,$sdt,$email,$role,$date,$anhien){
         $query="update users set userName='".$username."', pass='".$password."', hoTen='".$hoten."', sdt='".$sdt."', email='".$email."', role='".$role."', ngay='".$date."', anHien='".$anhien."' where idUser =".$iduser;
         $this->setQuery($query);
         $this->updateData();
    }
    function removeUser($id){
        $query="delete from users where idUser =".$id;
        $this->setQuery($query);
        $this->deleteData();

    }




}

?>