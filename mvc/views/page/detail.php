<section class="section-container-detail-one">
    <form class="section-content-detail" action="/asm/cart/addtocart" method="post">
        <div class="detail-left">
            <div class="block">
                <?php
                extract($data["datadetail"]); ?>
                <img src="/asm/public/image/<?= $hinhanh ?>" alt="">
            </div>
            <div class="block">
            <input hidden type="number" name="idpro" value="<?=$idSP?>" >
            <input hidden type="text" name="image" value="<?=$hinhanh?>" >
            <input hidden type="text" name="name" value="<?=$tenSP?>" >
            <input hidden type="number" name="price" value="<?=$gia?>" >
                <button name="buy-btn-submit">Mua</button>
            </div>
        </div>
        <div class="detail-right">
            <div class="block">
                <h1><?= $tenSP ?></h1>
            </div>
            <div class="block">
                <h1><?= $gia ?> VND</h1>
            </div>
            <div class="block">
                <label for="">Số lượng</label>
                <input name="amount" value="1" type="number">
            </div>
  


      
            <div class="block uudai">
                <h1>Ưu đãi liên quan</h1>
                <p>Nhập mã "QRMEGA": Giảm ngay 10%, thanh toán qua VNPAY</p>
                <p>Hoàn 30%, tối đa 100K, thanh toán ví Moca</p>
                <p>Hoàn 30%, tối đa 100K, thanh toán ví Moca</p>
                <p>Giảm ngay 20K, đơn hàng từ 50K, thanh toán qua Ví ZaloPay</p>
                <p>Nhập mã "AIRPAY024", Giảm ngay 10%, đơn hàng từ 0đ, thanh toán qua ví AirPay</p>
            </div>

        </div>
    </form>


</section>
<section class="section-container-detail-two">
    <div class="section-content-detail-two">
        <h1>Thông tin sản phẩm</h1>
        <div class="description">
            <?= $moTa ?>
        </div>
        <!-- <div class="right">thong so</div> -->

    </div>
</section>