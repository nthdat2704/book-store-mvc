<section>
    <div class="section-container-login">
        <div class="section-content-login">
            <form class="form-width" action="order" method="post">
                <table class="infomation-table" width="100%">
                    <h3>Thông tin đặt hàng</h3>
                    <tr>
                        <td>Người đặt hàng</td>

                        <td><input name="name" width="100%" type="text" value="<?= $_SESSION["user"]["hoTen"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input name="address" width="100%" type="text"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input name="email" width="100%" type="text" value="<?= $_SESSION["user"]["email"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input name="phonenumber" width="100%" type="text" value="<?= $_SESSION["user"]["sdt"] ?>"></td>
                    </tr>

                </table>
                <table class="phuongthuctt" width="100%">
                    <h3>Phương thức thanh toán</h3>
                    <tr>
                        <td><input width="1px" value="0" name="pttt" checked type="radio">Thanh toán trước</td>
                        <td><input value="1" name="pttt" type="radio">Thanh toán sau</td>

                    </tr>


                </table>
                <table class="shadow-table">
                    <h3>Thông tin giỏ hàng</h3>
                    <thead>
                        <th colspan="2">Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th colspan="3">Thành Tiền</th>
                    </thead>

                    <?php
                    $tongtien = 0;
                    for ($i = 0; $i < sizeof($_SESSION["mycart"]); $i++) {
                        $thanhtien = (int)$_SESSION['mycart'][$i][3] * (int)$_SESSION['mycart'][$i][4];
                        $tongtien += $thanhtien;
                        echo '
                                <tbody>
                                <td> <a href="detail.html"> <img style="width: 100px;" src="/asm/public/image/' . $_SESSION["mycart"][$i][2] . '" alt=""></a></td>
                                <td>    <h5>' . $_SESSION["mycart"][$i][1] . '</h5></td>
                                <td>    <h5>' . $_SESSION["mycart"][$i][3] . '</h5></td>
                                <td>  <h5>' . $_SESSION["mycart"][$i][4] . '</h5></td>
                                <td>    <h3>' . $thanhtien . '</h3></td>
                                <td><a href="/asm/cart/del/' . $i . '"> <i class="fas  fa-times"></i> </a><td>
                                </tbody>
                                ';
                    }
                    echo '<th colspan="3">Tổng cộng</th>
                            <th colspan="6">' . $tongtien . '</th>
                        <input hidden name="tongtien" value="'.$tongtien.'" type="text">
                            
                            '

                    ?>
                </table>
                <div class="block center-btn">
                    <?php
                    if (!empty($_SESSION['mycart'])) {
                        if (isset($_SESSION['user'])) {
                            echo '<button name="order-btn-submit" >Đồng ý đặt hàng</button>';
                        } else {
                            echo '<a href="/asm/user/login"><button>Thanh Toán</button></a>';
                        }
                    } else {
                        echo 'Không có sản phẩm nào trong giỏ hàng';
                    }


                    ?>

                </div>
            </form>
        </div>
    </div>

</section>