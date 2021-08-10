<section>
                <div class="section-container">
                    <div class="section-content">
                    <?php
                    foreach ($data["productbyid"] as $dataprobyid) {
                        extract($dataprobyid);
                        echo '
                        <div class="product">
                            <div class="block">
                               <a href="/asm/detail/detailproduct/'.$idSP.'"><img src="/asm/public/image/'.$hinhanh.'" alt="img"></a>
                            </div>
                            <div class="block">
                                <h5>'.$tenSP.'</h5>
                            </div>
                            <div class="block">
                                <h3>'.$gia.' Đ</h3>
                            </div>
                            <div class="block">
                                <button class="buy">Mua Ngay</button>
                            </div>
                        </div>';
                    }
                    ?>

                    </div>
                </div>

            </section>