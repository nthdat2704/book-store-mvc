<section>
                <div class="admin">
                    <div class="admin-content">
                        <h1>Đơn hàng</h1>
                    </div>

                </div>
            </section>
            <!-- <section class="popup-section">
                <div class="section-content-add">
                    <div class="frame">
                        <div class="close">X</div>
                        <h1>Thêm đơn hàng</h1>
                        <div class="block">
                            <label for="">ID</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">customer_name</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">customer_address</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">customer_email</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">customer_phone_number</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">created_date</label>
                            <input type="text">
                        </div>
                        <div class="block">
                            <label for="">status</label>
                            <input type="text">
                        </div>

                        <div class="block center-btn">
                            <button>Đồng ý</button>
                        </div>
                    </div>


                </div>
            </section> -->
            <section class="popup-section">
                <div class="section-content-edit">
                    <form action="orders/editOrder" method="post" class="frame">
                        <div id="close">X</div>
                        <h1>Sửa đơn hàng</h1>
                        <div class="block">
                            <label for="">idBill</label>
                            <input readonly='readonly'  id="idBill" name="idBill" type="text">
                        </div>
                        <div class="block">
                            <label for="">iduser</label>
                            <input disabled id="iduser" name="iduser" type="text">
                        </div>
                        <div class="block">
                            <label for="">billname</label>
                            <input disabled id="billname" name="billname" type="text">
                        </div>
                        <div class="block">
                            <label for="">address</label>
                            <input disabled id="address" name="address"type="text">
                        </div>
                        <div class="block">
                            <label for="">ngayDatHang</label>
                            <input disabled id="ngayDatHang" name="ngayDatHang"type="text">
                        </div>
                        <div class="block">
                            <label for="">tongtien</label>
                            <input disabled id="tongtien" name="tongtien"type="text">
                        </div>
                        <div class="block">
                            <label for="">email</label>
                            <input disabled id="email" name="email"type="text">
                        </div>
                        <div class="block">
                            <label for="">billtel</label>
                            <input disabled id="billtel" name="billtel"type="text">
                        </div>
                        <div class="block">
                            <label for="">pttt</label>
                            <select disabled name="pttt" id="pttt">
                            <option value="0">Ship code</option>
                            <option value="1">Chuyển khoản</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="">status</label>
                            <select name="status" id="status">
                            <option value="0">Đơn mới</option>
                            <option value="1">Đã gửi</option>
                            <option value="2">Đã nhận</option>
                            
                            </select>
                        </div>

                        <div class="block center-btn">
                            <button name="edit-btnsubmit">Đồng ý</button>
                        </div>
                        </form>


                </div>
            </section>

            <section class="section-content">
                <!-- <div class="action section-content-block">
                    <div class="block">
                        <button id="add">Thêm</button>
                    </div>
                </div> -->
                <div class="show section-content-block">
                    <table>
                        <tr>
                            <th>idBill</th>
                            <th>iduser</th>
                            <th>billname</th>
                            <th>address</th>
                            <th>ngayDatHang</th>
                            <th>tongtien</th>
                            <th>email</th>
                            <th>billtel</th>
                            <th>pttt</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                        <tbody id="data-listorder-admin">
                        <?php
                        foreach ($data["orders"] as $data) {
                            extract($data);
                            echo '  <tr>
                            <td>'.$idBill.'</td>
                            <td>'.$idUser.'</td>
                            <td>'.$billName.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$ngayDatHang.'</td>
                            <td>'.$tongTien.'</td>
                            <td>'.$email.'</td>
                            <td>'.$billTel.'</td>
                            <td>'.$pttt.'</td>
                            <td>'.$billstatus.'</td>
                            <td>
                            <button class="edit-btn">Sửa</button>
                            </td>
                        </tr>';
                        }
                        
                        ?>
                        
                        
                        
                        </tbody>



                    </table>
                </div>


            </section>