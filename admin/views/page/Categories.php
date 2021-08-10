<section>
    <div class="admin">
        <div class="admin-content">
            <h1>Danh mục</h1>
        </div>

    </div>
</section>
<section class="popup-section">
    <div class="section-content-add">
        <form class="frame" action="categories/addCategories" method="post">
            <div class="close">X</div>
            <h1>Thêm danh mục</h1>
            <div class="block">
                <label for="">ID</label>
                <input disabled type="text">
            </div>
            <div class="block">
                <label for="">Name</label>
                <input name="name" type="text">
            </div>
            <div class="block">
            <select name="anhien" id="">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
            </select>
 
            </div>

            <div class="block center-btn">
                <button class="anhien" name="addCategories-btn">Đồng ý</button>
            </div>
        </form>
    </div>
</section>
<section class="popup-section">
    <div class="section-content-edit">
        <form action="categories/editCategories" method="post" class="frame">
        
            <div id="close">X</div>
            <h1>Sửa danh mục</h1>
            <div class="block">
                <label for="">ID</label>
                <input name="id" id="id" type="text">
            </div>
            <div class="block">
                <label for="">Name</label>
                <input name="name" id="name" type="text">
            </div>
            <div class="block">
                <label for="">Ẩn hiện</label>
                <select name="anhien" id="anhien">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
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
                <th>Ẩn hiện</th>
                <th>Action</th>
            </tr>
            <tbody id="data-cata-admin">
                <?php
                foreach ($data["categories"] as $data) {
                    extract($data);
                    echo '<tr>
                                <td>' . $idLoai . '</td>
                                <td>' . $tenLoai . '</td>
                                <td>' . $anHien . '</td>
                                <td>
                                <button name="edit-btn" class="edit-btn">Sửa</button>
                                <a href="categories/removeCategories/'.$idLoai.'"><button id="delete-btn">Xóa</button></a>
                                
                                </td>
                                </tr>';
                }


                ?>

            </tbody>

        </table>
    </div>


</section>