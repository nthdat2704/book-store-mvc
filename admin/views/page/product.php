<section>
    <div class="admin">
        <div class="admin-content">
            <h1>Sản phẩm</h1>
        </div>

    </div>
</section>
<section class="popup-section">
    <div class="section-content-add">
        <form action="product/addProduct" method="post" class="frame">
            <div class="close">X</div>
            <h1>Thêm sản phẩm</h1>
            <div class="block">
                <label for="">ID</label>
                <input disabled type="text">
            </div>
            <div class="block">
                <label for="">Name</label>
                <input name="name" type="text">
            </div>
            <div class="block">
                <label for="">cate_id</label>
                <select name="cateid" id="">
                <?php
                foreach ($data["categories"] as $datacata) {
                    extract($datacata);
                    echo '<option value="'.$idLoai.'">'.$tenLoai.'</option>';
                }
                ?>
                </select>
             
            </div>
            <div class="block">
                <label for="">price</label>
                <input name="price" type="text">
            </div>
            <div class="block">
                <label for="">detail</label>
                <textarea name="detail" id="" rows="10"></textarea>
            </div>
            <div class="block">
                <label for="">image</label>
                <input name="image" type="file">
            </div>
            <div class="block">
                <label for="">Ẩn hiện</label>
                <select name="anhien" id="">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
                </select>
            </div>
            <div class="block">
                <label for="">Top</label>
                <select name="top" id="">
                <option value="1">Top</option>
                <option value="0">Ẩn</option>
                </select>
            </div>

            <div class="block center-btn">
                <button name="addProduct-btn">Đồng ý</button>
            </div>


        </form>

    </div>
</section>
<section class="popup-section">
    <div class="section-content-edit">
    <form action="product/editProduct" method="post" class="frame">
            <div id="close">X</div>
            <h1>Sửa sản phẩm</h1>
            <input type="hidden" value="" name="idsp" id="idsp">
            <div class="block">
                <label for="">ID</label>
                <input id="id" disabled  type="text">
            </div>
            <div class="block">
                <label for="">Name</label>
                <input id="name" name="name" type="text">
            </div>
            <div class="block">
                <label for="">cate_id</label>
                <select name="cateid" id="">
                <?php
                foreach ($data["categories"] as $datacata) {
                    extract($datacata);
                    echo '<option value="'.$idLoai.'">'.$tenLoai.'</option>';
                }
                ?>
                </select>
             
            </div>
            <div class="block">
                <label for="">price</label>
                <input  id="price" name="price" type="text">
            </div>
            <div class="block">
                <label for="">detail</label>
                <textarea  name="detail" id="detail" rows="10"></textarea>
            </div>
            <div class="block">
                <label for="">image</label>
                <input id="image" name="image" type="file">
            </div>
            <div class="block">
                <label for="">Ẩn hiện</label>
                <select name="anhien" id="">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
                </select>
            </div>
            <div class="block">
                <label for="">Top</label>
                <select name="top" id="">
                <option value="1">Top</option>
                <option value="0">Ẩn</option>
                </select>
            </div>

            <div class="block center-btn">
                <button name="editProduct-btn">Đồng ý</button>
            </div>


        </form>

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

                <th>ID</th>
                <th>Name</th>
                <th>cate_id</th>
                <th>price</th>
                <th>detail</th>
                <th>image</th>
                <th>Ẩn Hiện</th>
                <th>Top</th>
                <th>Action</th>
            </tr>
            <tbody id="data-product-admin">
                <?php
                foreach ($data["product"] as $datapro) {
                    extract($datapro);
                    echo '
                            <tr>

                            <td>' . $idSP . '</td>
                            <td>' . $tenSP . '</td>
                            <td>' . $idLoai . '</td>
                            <td>' . $gia . '</td>
                            <td width="50%" >' . $moTa . '</td>
                            <td><img width="100px" src="/asm/public/image/' . $hinhanh . '" alt="ảnh"></td>
                            <td>' . $anHien . '</td>
                            <td>' . $Top . '</td>
                            <td>
                            <button class="edit-btn">Sửa</button>
                            <a href="product/removeproduct/'.$idSP.'"><button id="delete-btn">Xóa</button></a>

                            </td>
                        </tr>
                            ';
                }

                ?>
            </tbody>
        </table>


    </div>



</section>