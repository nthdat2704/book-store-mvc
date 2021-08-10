<section>
                <div class="section-container-login">
                    <div class="section-content-login">

                        <form action="checklogin" method="post">
                            <h1>Login</h1>

                            <div class="block">
                                <label for="">Tài Khoản</label>
                                <input name="username" type="text">
                            </div>
                            <div class="block">
                                <label for="">Mật Khẩu</label>
                                <input name="password" type="password">
                            </div>
                            <div class="block center-btn">
                                <button name="login-submit-btn">Đăng Nhập</button>
                            </div>
                            <div class="block center-btn">
                                <a href="/asm/user/register">Đăng ký</a>
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