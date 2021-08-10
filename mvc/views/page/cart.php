<section>
                <div class="section-container-login">
                    <div class="section-content-login">
                        <div>
                            <h1>Giỏ Hàng</h1>
                            <table class="shadow-table">
                                <thead>
                                    <th colspan="2">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th colspan="3">Thành Tiền</th>
                                </thead>
                            
                            <?php
                            $tongtien = 0;
                            for ($i=0; $i <sizeof($_SESSION["mycart"]); $i++) { 
                                $thanhtien =(int)$_SESSION['mycart'][$i][3] * (int)$_SESSION['mycart'][$i][4];
                                $tongtien += $thanhtien;
                                echo '
                                <tbody>
                                <td> <a href="detail.html"> <img style="width: 100px;" src="/asm/public/image/'.$_SESSION["mycart"][$i][2].'" alt=""></a></td>
                                <td>    <h5>'.$_SESSION["mycart"][$i][1].'</h5></td>
                                <td>    <h5>'.$_SESSION["mycart"][$i][3].'</h5></td>
                                <td>   <input type="text" value="'.$_SESSION["mycart"][$i][4].'"></td>
                                <td>    <h3>'.$thanhtien.'</h3></td>
                                <td><a href="/asm/cart/del/'.$i.'"> <i class="fas  fa-times"></i> </a><td>
                                </tbody>
                                ';
                            }
                            echo '<th colspan="3">Tổng cộng</th>
                            <th colspan="6">'.$tongtien.'</th>
                            '

                            ?>
                            </table>
                            <div class="block center-btn">
                            <?php
                            if(!empty($_SESSION['mycart'])){
                                if (isset($_SESSION['user'])) {
                                    echo '<a href="/asm/cart/checkout"><button>Thanh Toán</button></a>';
                                } else {
                                    echo '<a href="/asm/user/login"><button>Thanh Toán</button></a>';
                                }
            
            
                            }
                            else{
                                echo 'Không có sản phẩm nào trong giỏ hàng';
            
                            }
                            
                            
                            ?>

                            </div>


                        </div>



                    </div>
                </div>

            </section>