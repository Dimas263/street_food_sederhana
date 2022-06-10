<?=include_once ("header.php")?>

    <!-- page-banner-section
        ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Our Menu</h1>
            <span>good food fresh ingredients</span>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- page-ban-list -->
    <div class="container">
        <ul class="page-ban-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="menu">Our Menu</a></li>
        </ul>
    </div>
    <!-- end page-ban-list -->

    <!-- menu-section
        ================================================== -->
    <section class="menu-section">
        <div class="menu-box pizza-menu">
            <div class="container">
                <div class="title-section">
                    <h2>Food</h2>
                    <span>Try the delicious new food from our chef.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/6.jpg" alt="">
                            <h3>Seblak</h3>
                            <p>Biasa, pedas level (0-10)</p>
                            <span class="price">Rp. 20.000</span>
                            <a href="cart" class="button-one" onclick="save_product1_cart()">
                                Add To Cart
                                <script>
                                    function save_product1_cart(){
                                        var name = "Seblak pedas level 10";
                                        var data = "20000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product1_chart()">
                                Del From Cart
                                <script>
                                    function del_product1_chart(){
                                        var name = "Seblak pedas level 10";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/7.jpg" alt="">
                            <h3>Ayam Geprek, Penyet</h3>
                            <p>Biasa, pedas level (0-10)</p>
                            <span class="price">Rp. 15.000</span>
                            <a href="cart" class="button-one" onclick="save_product2_cart()">
                                Add To Cart
                                <script>
                                    function save_product2_cart(){
                                        var name = "Ayam Geprek level 10";
                                        var data = "15000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product2_chart()">
                                Del From Cart
                                <script>
                                    function del_product2_chart(){
                                        var name = "Ayam Geprek level 10";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/8.jpg" alt="">
                            <h3>Ketoprak</h3>
                            <p>Biasa, pedas, medok</p>
                            <span class="price">Rp. 10.000</span>
                            <a href="cart" class="button-one" onclick="save_product3_cart()">
                                Add To Cart
                                <script>
                                    function save_product3_cart(){
                                        var name = "Ketoprak medok";
                                        var data = "10000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product3_chart()">
                                Del From Cart
                                <script>
                                    function del_product3_chart(){
                                        var name = "Ketoprak medok";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/9.jpg" alt="">
                            <h3>Bakso</h3>
                            <p>Biasa, jumbo, pedas</p>
                            <span class="price">Rp. 15.000</span>
                            <a href="cart" class="button-one" onclick="save_product4_cart()">
                                Add To Cart
                                <script>
                                    function save_product4_cart(){
                                        var name = "Bakso jumbo";
                                        var data = "15000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product4_chart()">
                                Del From Cart
                                <script>
                                    function del_product4_chart(){
                                        var name = "Bakso jumbo";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/10.jpg" alt="">
                            <h3>Mie Ayam</h3>
                            <p>Biasa, campur bakso, pedas</p>
                            <span class="price">Rp. 10.000</span>
                            <a href="cart" class="button-one" onclick="save_product5_cart()">
                                Add To Cart
                                <script>
                                    function save_product5_cart(){
                                        var name = "Mie Ayam bakso";
                                        var data = "10000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product5_chart()">
                                Del From Cart
                                <script>
                                    function del_product5_chart(){
                                        var name = "Mie Ayam bakso";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-box pasta-menu">
            <div class="container">
                <div class="title-section">
                    <h2>Snacks</h2>
                    <span>Try the delicious new snacks from our chef.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/11.jpg" alt="">
                            <h3>Kebab</h3>
                            <p>Level (1-5)</p>
                            <span class="price">Rp. 8.000</span>
                            <a href="cart" class="button-one" onclick="save_product6_cart()">
                                Add To Cart
                                <script>
                                    function save_product6_cart(){
                                        var name = "Kebab level 5";
                                        var data = "8000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product6_chart()">
                                Del From Cart
                                <script>
                                    function del_product6_chart(){
                                        var name = "Kebab level 5";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/12.jpg" alt="">
                            <h3>Martabak</h3>
                            <p>Manis, telor</p>
                            <span class="price">Rp. 15.000</span>
                            <a href="cart" class="button-one" onclick="save_product7_cart()">
                                Add To Cart
                                <script>
                                    function save_product7_cart(){
                                        var name = "Martabak telor";
                                        var data = "15000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product7_chart()">
                                Del From Cart
                                <script>
                                    function del_product7_chart(){
                                        var name = "Martabak telor";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/13.jpg" alt="">
                            <h3>Roti Bakar</h3>
                            <p>Coklat, keju, blueberry</p>
                            <span class="price">Rp. 10.000</span>
                            <a href="cart" class="button-one" onclick="save_product8_cart()">
                                Add To Cart
                                <script>
                                    function save_product8_cart(){
                                        var name = "Roti Bakar coklat";
                                        var data = "10000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product8_chart()">
                                Del From Cart
                                <script>
                                    function del_product8_chart(){
                                        var name = "Roti Bakar coklat";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-box burger-menu">
            <div class="container">
                <div class="title-section">
                    <h2>Coffee</h2>
                    <span>Try the delicious new coffee from our chef.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/14.jpg" alt="">
                            <h3>Americano Coffee</h3>
                            <p>Hot, Ice</p>
                            <span class="price">Rp. 18.000</span>
                            <a href="cart" class="button-one" onclick="save_product9_cart()">
                                Add To Cart
                                <script>
                                    function save_product9_cart(){
                                        var name = "Americano Coffee hot";
                                        var data = "18000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product9_chart()">
                                Del From Cart
                                <script>
                                    function del_product9_chart(){
                                        var name = "Americano Coffee hot";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/15.jpg" alt="">
                            <h3>Milo Coffee</h3>
                            <p>Hot, Ice</p>
                            <span class="price">Rp. 15.000</span>
                            <a href="cart" class="button-one" onclick="save_product10_cart()">
                                Add To Cart
                                <script>
                                    function save_product10_cart(){
                                        var name = "Milo Coffee ice";
                                        var data = "15000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product10_chart()">
                                Del From Cart
                                <script>
                                    function del_product10_chart(){
                                        var name = "Milo Coffee ice";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/16.jpg" alt="">
                            <h3>Cappucino Coffee</h3>
                            <p>Hot, Ice</p>
                            <span class="price">Rp. 13.000</span>
                            <a href="cart" class="button-one" onclick="save_product11_cart()">
                                Add To Cart
                                <script>
                                    function save_product11_cart(){
                                        var name = "Cappucino Coffee ice";
                                        var data = "13000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product11_chart()">
                                Del From Cart
                                <script>
                                    function del_product11_chart(){
                                        var name = "Milo Coffee ice";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-box burger-menu">
            <div class="container">
                <div class="title-section">
                    <h2>Non Coffee</h2>
                    <span>Try the delicious new uncoffee from our chef.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/18.jpg" alt="">
                            <h3>Air Mineral</h3>
                            <p>Aqua, le minerale, vit</p>
                            <span class="price">Rp. 5.000</span>
                            <a href="cart" class="button-one" onclick="save_product12_cart()">
                                Add To Cart
                                <script>
                                    function save_product12_cart(){
                                        var name = "Air Mineral aqua";
                                        var data = "5000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product12_chart()">
                                Del From Cart
                                <script>
                                    function del_product12_chart(){
                                        var name = "Air Mineral aqua";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/19.jpg" alt="">
                            <h3>Susu</h3>
                            <p>Susu biasa, susu jahe, hot, ice</p>
                            <span class="price">Rp. 5.000</span>
                            <a href="cart" class="button-one" onclick="save_product13_cart()">
                                Add To Cart
                                <script>
                                    function save_product13_cart(){
                                        var name = "Susu biasa";
                                        var data = "5000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product13_chart()">
                                Del From Cart
                                <script>
                                    function del_product13_chart(){
                                        var name = "Susu biasa";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-post">
                            <img src="upload/menu/20.jpg" alt="">
                            <h3>Teh</h3>
                            <p>Teh tawar, teh manis, hot, ice</p>
                            <span class="price">Rp. 5.000</span>
                            <a href="cart" class="button-one" onclick="save_product14_cart()">
                                Add To Cart
                                <script>
                                    function save_product14_cart(){
                                        var name = "Teh tawar";
                                        var data = "2000";
                                        localStorage.setItem(name, data);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                            <br><br>
                            <a href="cart" class="button-one" onclick="del_product14_chart()">
                                Del From Cart
                                <script>
                                    function del_product14_chart(){
                                        var name = "Teh tawar";
                                        localStorage.removeItem(name);
                                        doShowAll();
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End menu section -->

    <!-- book-section
        ================================================== -->
    <section class="book-section">
        <div class="container">
            <div class="book-box">
                <div class="title-section dark-style">
                    <h2>Book a Table</h2>
                    <span> </span>
                </div>

                <form id="reservation-form">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <label for="name" style="color: black">Your Name:</label>
                                    <input name="name" id="name" type="text" placeholder="Enter your name">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label for="date" style="color: black">Date:</label>
                                    <input name="date" id="date" type="text" placeholder="05/23">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label for="time" style="color: black">Time:</label>
                                    <input name="time" id="time" type="text" placeholder="12:00">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label for="guest" style="color: black">Guest:</label>
                                    <input name="guest" id="guest" type="text" placeholder="2">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" id="submit_reservation" value="Reservations">
                        </div>
                    </div>
                    <div id="msg" class="message"></div>
                </form>
            </div>

        </div>
    </section>
    <!-- End book section -->

<?=include_once ("footer.php")?>