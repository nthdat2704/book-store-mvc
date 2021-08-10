<section>
    <div class="section-container-login">
        <div class="section-content-login">
            <form class="form-width" action="order" method="post">
                <table class="infomation-table" width="100%">
                <h3>Xin cảm ơn quý khách</h3>
                    <h3>Thông tin đặt hàng</h3>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$data["databill"]["billName"]?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$data["databill"]["diachi"]?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$data["databill"]["email"]?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$data["databill"]["billTel"]?></td>
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
                    $totalprice = 0;
                    foreach ($data["datacart"] as $cart) {
                        extract($cart);
                        echo '
                        <tbody>
                        <td> <a href="detail.html"> <img style="width: 100px;" src="/asm/public/image/' . $img . '" alt=""></a></td>
                        <td>    <h5>' . $name . '</h5></td>
                        <td>    <h5>' . $price . '</h5></td>
                        <td>  <h5>' . $soLuong . '</h5></td>
                        <td>    <h3>' . $tongtien . '</h3></td>
                        </tbody>
                        ';
                        $totalprice+=$tongtien;

                    }
                    echo '<th colspan="3">Tổng cộng</th>
                    <th colspan="6">' . $totalprice . '</th>';
                    ?>
                </table>
               
            </form>
        </div>
    </div>

</section>