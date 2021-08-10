<?php
class CartModel extends DB{
    function insertOrder($iduser, $name,$address,$date ,$tongtien,$email, $phonenumber, $pttt){
        $query="insert into bill(idUser , billName, diachi, ngayDatHang, tongTien, email, billTel, pttt) values('$iduser', '$name', '$address', '$date', '$tongtien', '$email', '$phonenumber', '$pttt')";
        $this->setQuery($query);
        return  $this-> InsertDataAndGetlastInsertID();
    }
    function insertCart($idUser ,$idBill, $idSP  ,$soLuong ,$tongtien,$img, $name, $price){
        $query="insert into cart (idUser , idSP, idBill, soLuong, tongtien, img, name, price) values('$idUser', '$idSP', '$idBill', '$soLuong', '$tongtien', '$img', '$name', '$price')";
        $this->setQuery($query);
        return  $this-> InsertDataAndGetlastInsertID();

    }
    function loadBillByID($id){
        $query = "select * from bill where idBill=" . $id;
        $this->setQuery($query);
        return $this->fetchOne();
    }
    function loadCartByID($id){
        $query = "select * from cart where idBill=" . $id;
        $this->setQuery($query);
        return $this->fetchAll();
    }

  

}


?>