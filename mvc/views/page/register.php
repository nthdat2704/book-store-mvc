<section>
                <div class="section-container-login">
                    <div class="section-content-login">

                        <form action="checkregister" method="post">
                            <h1>Đăng Ký</h1>

                            <div class="block">
                                <label for="">Tài Khoản</label>
                                <input name="username" type="text">
                            </div>
                            <div class="block">
                                <label for="">Mật Khẩu</label>
                                <input name="password" type="password">
                            </div>
                            <div class="block">
                                <label for="">Họ và tên</label>
                                <input name="name" type="text">
                            </div>
                            <div class="block">
                                <label for="">Email</label>
                                <input name="email" type="text">
                            </div>
                            <div class="block">
                                <label for="">SDT</label>
                                <input name="phonenumber" type="text">
                            </div>

                            <div class="block center-btn">
                                <button name="register-submit">Đăng Ký</button>
                            </div>
                            <div class="block center-btn">
                        
                            </div>
                            <?php
                            if(isset($data["thongbao"])){
                                echo '<div class="thongbao" >'.$data["thongbao"].'</div>';
                            }
                            
                            ?>
                        </form>

                    </div>
                </div>

            </section>