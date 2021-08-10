<header>
    <div class="header-container">
        <div class="header-content">
            <div class="block">
                <a class="logo" href="/asm/home"><img src="/asm/public/image/logo.png" alt=""></a>
            </div>
            <div class="block">
                <form class="search">
                    <input type="text" name="search" class="typeahead form-control" placeholder="Search by title, author, keyword, ISBN...">
                    <button type="submit">Tìm Kiếm</i></button>
                </form>
            </div>
            <div class="block cart">
                <div>
                    <a href="/asm/cart"> <i class="fas fa-shopping-cart">Checkout</i></a>
                    <!-- <a href="/asm/user">  <i class="fas fa-sign-in-alt">Login</i></a> -->
                </div>

                <?php
                if (isset($_SESSION["user"])) {
                    echo '<div>
                          <a class="logoutbtn" href="/asm/user/logout"><i class="fas fa-sign-in-alt">Logout</i>
                          </a>
                        </div>';
                } else {
                    echo '  <div>
                            <a href="/asm/user/login">  <i class="fas fa-sign-in-alt">Login</i></a>
                          </div>';
                }
                ?>
            </div>
        </div>
        <nav>
            <ul>

                <?php
                foreach ($data["categories"] as $datacate) {
                    extract($datacate);
                    echo '<li><a href="/asm/product/loadid/' . $idLoai . '">' . $tenLoai . '</a></li>';
                }



                ?>
            </ul>
        </nav>


    </div>

</header>