<?php
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
class Cart extends Controller
{
    public $getCatagories;
    public $getdetail;
    function __construct()
    {
        $this->getCatagories = $this->model("CategoriesModel");
        $this->getdetail = $this->model("ProductDetailModel");
    }
    function index()
    {
        $this->view('masterlayout', [
            "page" => "cart",
            "categories" => $this->getCatagories->getAllCategory()
        ]);
    }
    function addtocart()
    {


        if (isset($_POST["buy-btn-submit"])) {
            $name  = $_POST["name"];
            $price  = $_POST["price"];
            $idpro  = $_POST["idpro"];
            $img  = $_POST["image"];
            if (isset($_POST["amount"])) {
                $amount  = $_POST["amount"];
            } else {
                $amount = 1;
            }
            $total = $price * $amount;
            $addproduct = [$idpro, $name, $img, $price, $amount, $total];
            $check = false;
            if (!empty($_SESSION['mycart'])) {
                for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {
                    if ($_SESSION['mycart'][$i][0] == $addproduct[0]) {
                        $_SESSION['mycart'][$i][4] += $amount;
                        $check = true;
                        break;
                    }
                }
                if (!$check) {
                    array_push($_SESSION['mycart'], $addproduct);
                }
            } else {
                array_push($_SESSION['mycart'], $addproduct);
            }
            $this->view('masterlayout', [
                "page" => "cart",
                "categories" => $this->getCatagories->getAllCategory()
            ]);
        }
    }
    function del($param)
    {
        array_splice($_SESSION['mycart'], $param, 1);
        header("Location: /asm/cart");
    }
    function checkout()
    {
        $this->view('masterlayout', [
            "page" => "checkout",
            "categories" => $this->getCatagories->getAllCategory()
        ]);
    }


    function order()
    {

        if (isset($_POST["order-btn-submit"])) {
            if (isset($_SESSION['user']))
                $iduser = $_SESSION['user']['idUser'];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $pttt = $_POST["pttt"];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('H:i:sa d/m/Y');
            $tongtien = $_POST["tongtien"];
            $orderinfo = [$iduser, $name, $address, $date, $tongtien, $email, $phonenumber, $pttt];
            $bill = $this->model("CartModel");
            $idbill = $bill->insertOrder($iduser, $name, $address, $date, $tongtien, $email, $phonenumber, $pttt);
            $infoBill = $bill->loadBillByID($idbill);

            foreach ($_SESSION['mycart'] as $cart) {
                $bill->insertCart($_SESSION['user']['idUser'], $idbill, $cart[0], $cart[4], $cart[3] * $cart[4], $cart[2], $cart[1], $cart[3]);
            }
            $_SESSION['mycart'] = [];
            $infocart = $bill->loadCartByID($idbill);

            //viết gửi mail thông tin đơn hàng ở đây
            $this->sendMailToCustomer($infoBill, $infocart);

            $this->view('masterlayout', [
                "page" => "order",
                "categories" => $this->getCatagories->getAllCategory(),
                "databill" => $infoBill,
                "datacart" => $infocart
            ]);
        }
    }



    function sendMailToCustomer($infoBill, $infocart)
    {
        extract($infoBill);
        $content = '  
        <h3 style="text-align: center; color:#77b748">Xin cảm ơn quý khách</h3>
        <h3 style="text-align: center; color:#77b748" >Thông tin đặt hàng</h3>
        
        <table class="infomation-table" width="100%">

            <tr style="    display: grid;    grid-template-columns: 1fr 1fr;    justify-items: center;    align-items: center;    align-items: center;
            border-bottom: 3px solid whitesmoke;"    border-bottom: 3px solid whitesmoke;>
                <td>Người đặt hàng</td>
                <td>' . $billName . '</td>
            </tr>
            <tr style="    display: grid;    grid-template-columns: 1fr 1fr;    justify-items: center;    align-items: center;    align-items: center;
            border-bottom: 3px solid whitesmoke;" border-bottom: 3px solid whitesmoke; >
                <td>Địa chỉ</td>
                <td>' . $diachi . '</td>
            </tr>
            <tr style="    display: grid; grid-template-columns: 1fr 1fr; justify-items: center; align-items: center;    align-items: center;
            border-bottom: 3px solid whitesmoke;"    border-bottom: 3px solid whitesmoke;>
                <td>Email</td>
                <td>' . $email . '</td>
            </tr>
            <tr style="    display: grid;    grid-template-columns: 1fr 1fr;    justify-items: center;    align-items: center;    align-items: center;
            border-bottom: 3px solid whitesmoke;"    border-bottom: 3px solid whitesmoke;>
                <td>Điện thoại</td>
                <td>' . $billTel . '</td>
            </tr>

        </table>';


        $content .= '
        <h3 style="text-align: center; color:#77b748" >Thông tin giỏ hàng</h3>

        <table style="border-collapse: collapse;     text-align: center;     width: 100%;" ">
        <thead>
            <th style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" colspan="2">Sản phẩm</th>
            <th  style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" >Giá</th>
            <th  style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" >Số Lượng</th>
            <th  style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" colspan="3">Thành Tiền</th>
        </thead>';
        $totalprice = 0;
        foreach ($infocart as $cart) {
            extract($cart);
            $content .= '
                    <tbody>
                    <td style="padding: 10px 20px;" >  <img style="width: 100px;" src="/asm/public/image/' . $img . '" alt="image"></td>
                    <td style="padding: 10px 20px;" >     <h5>' . $name . '</h5></td>
                    <td style="padding: 10px 20px;">     <h5>' . $price . '</h5></td>
                    <td style="padding: 10px 20px;">   <h5>' . $soLuong . '</h5></td>
                    <td style="padding: 10px 20px;">     <h3>' . $tongtien . '</h3></td>
                    </tbody>
                    ';
            $totalprice += $tongtien;
        }
        $content .= '<th  style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" colspan="3">Tổng cộng</th>
                <th  style="    padding: 10px 20px;     background-color: whitesmoke;     border-right: 5px solid white;" colspan="6">' . $totalprice . '</th>';


        $content .= '</table>';

        require_once "./mvc/core/mailer/Mail.php";
    }
}
