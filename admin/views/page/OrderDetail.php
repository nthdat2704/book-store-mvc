<section>
                <div class="admin">
                    <div class="admin-content">
                        <h1>Đơn hàng chi tiết</h1>
                    </div>

                </div>
            </section>
            <section class="popup-section">
                <div class="section-content-add">
                    <div class="frame">
                        <div class="close">X</div>
                        <h1>Thêm categories</h1>
                        <div class="block">
                            <label for="">order_id</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">product_id</label>
                            <input type="password">
                        </div>
                        <div class="block">
                            <label for="">quantity</label>
                            <input type="password">
                        </div>
                        <div class="block">
                            <label for="">unit_price</label>
                            <input type="password">
                        </div>

                        <div class="block center-btn">
                            <button>Đồng ý</button>
                        </div>
                    </div>


                </div>
            </section>
            <section class="popup-section">
                <div class="section-content-edit">
                    <div class="frame">
                        <div class="close">X</div>
                        <h1>Sửa</h1>
                        <div class="block">
                            <label for="">order_id</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">product_id</label>
                            <input type="password">
                        </div>
                        <div class="block">
                            <label for="">quantity</label>
                            <input type="password">
                        </div>
                        <div class="block">
                            <label for="">unit_price</label>
                            <input type="password">
                        </div>

                        <div class="block center-btn">
                            <button>Đồng ý</button>
                        </div>
                    </div>


                </div>
            </section>

            <section class="section-content">
                <div class="action section-content-block">
                    <div class="block">
                        <button id="add">Thêm</button>
                    </div>
                </div>
                <div class="show section-content-block">
                    <table>
                        <tr>

                            <th>idCart </th>
                            <th>idUser </th>
                            <th>idSP</th>
                            <th>idBill </th>
                            <th>soLuong</th>
                            <th>tongtien</th>
                            <th>img</th>
                            <th>name</th>
                            <th>price</th>
                            <th>action</th>
                        </tr>
                        <tbody id="data-detailorder-admin">
                        <?php
                        foreach ($data["order"] as $data) {
                            extract($data);
                            echo '
                            <tr>

                            <th>'.$idCart.'</th>
                            <th>'.$idUser.'</th>
                            <th>'.$idSP.'</th>
                            <th>'.$idBill.'</th>
                            <th>'.$soLuong.'</th>
                            <th>'.$tongtien.'</th>
                            <td><img width="100px" src="/asm/public/image/'.$img.'" alt="ảnh"></td>
                            <th>'.$name.'</th>
                            <th>'.$price.'</th>
                            <th>action</th>
                        </tr>
                            ';

                        
                        }
                        
                        
                        ?>
                        
                        
                        </tbody>


                    </table>
                </div>


            </section>