<section>
    <div class="admin">
        <div class="admin-content">
            <h1>Khách hàng</h1>
        </div>

    </div>
</section>
<section class="popup-section">
    <div class="section-content-add">
        <form action="user/addUser" method="post" class="frame">
            <div class="close">X</div>
            <h1>Thêm user</h1>
            <div class="block">
                <label for="">idUser</label>
                <input disabled name="idUser" type="text">
            </div>
            <div class="block">
                <label for="">username</label>
                <input name="username" type="text">
            </div>
            <div class="block">
                <label for="">pass</label>
                <input name="pass" type="text">
            </div>
            <div class="block">
                <label for="">hoTen</label>
                <input name="hoTen" type="text">
            </div>
            <div class="block">
                <label for="">sdt</label>
                <input name="sdt" type="text">
            </div>
            <div class="block">
                <label for="">email</label>
                <input name="email" type="text">
            </div>
            <div class="block">
                <label for="">role</label>
                <select name="role" id="">
                    <option value="0">Khách hàng</option>
                    <option value="1">Admin</option>

                </select>
            </div>
            <div class="block">
                <label for="">ngay</label>
                <input name="ngay" type="date">
            </div>
            <div class="block">
                <label for="">anHien</label>
                <select name="anHien" id="">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>

            <div class="block center-btn">
                <button name="adduser-btn">Đồng ý</button>
            </div>
        </form>

    </div>
</section>
<section class="popup-section">
    <div class="section-content-edit">
        <form action="user/edituser" method="post" class="frame">
            <div id="close">X</div>
            <h1>Sửa sản phẩm</h1>
            <div class="block">
                <label for="">idUser</label>
                <input id="iduser" name="iduser" type="text">
            </div>
            <div class="block">
                <label for="">username</label>
                <input id="name" name="username" type="text">
            </div>
            <div class="block">
                <label for="">pass</label>
                <input id="password" name="password" type="text">
            </div>
            <div class="block">
                <label for="">hoTen</label>
                <input id="hoten" name="hoten" type="text">
            </div>
            <div class="block">
                <label for="">sdt</label>
                <input id="sdt" name="sdt" type="text">
            </div>
            <div class="block">
                <label for="">email</label>
                <input id="email" name="email" type="text">
            </div>
            <div class="block">
                <label for="">role</label>
                <select name="role" id="">
                    <option value="0">Khách hàng</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <div class="block">
                <label for="">ngay</label>
                <input id="date" name="date" type="date">
            </div>
            <div class="block">
                <label for="">anHien</label>
                <select name="anhien" id="">
                    <option value="0">Ẩn</option>
                    <option value="1">Hiện</option>
                </select>
            </div>

            <div class="block center-btn">
                <button name="edituser-btn">Đồng ý</button>
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
                <th>idUser</th>
                <th>username</th>
                <th>pass</th>
                <th>hoTen</th>
                <th>sdt</th>
                <th>email</th>
                <th>role</th>
                <th>ngay</th>
                <th>anHien</th>
                <th>Action</th>
            </tr>
            <tbody id="data-product-admin">
                <?php
                foreach ($data["user"] as $datauser) {
                    extract($datauser);
                    echo '<tr>
                            <td>' . $idUser . '</td>
                            <td>' . $userName . '</td>
                            <td>' . $pass . '</td>
                            <td>' . $hoTen . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $email . '</td>
                            <td>' . $role . '</td>
                            <td>' . $ngay . '</td>
                            <td>' . $anHien . '</td>
                            <td>
                            <button name="edit-btn" class="edit-btn">Sửa</button>
                            <a href="user/removeuser/'.$idUser.'"><button id="delete-btn">Xóa</button></a>
                            
                            </td>
                        </tr>';
                }

                ?>

            </tbody>
        </table>
    </div>

</section>