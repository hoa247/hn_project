<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="dropdown megamenu-fw second">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">Shop Pages</h5>
                            <ul>
                                <li><a href="shop-list.html">Shop List</a>
                                </li>
                                <li><a href="shop-list-sidebar.html">Shop List With Sidebar</a>
                                </li>
                                <li><a href="shop-grid.html">Shop Grid</a>
                                </li>
                                <li><a href="shop-grid-sidebar.html">Shop Grid With Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">Shop Pages</h5>
                            <ul>
                                <li><a href="single-product.html">Product Details </a>
                                </li>
                                <li><a href="single-product-sidebar.html">Product Details With Sidebar</a>
                                </li>
                                <li><a href="cart.html">Cart</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">Other Pages</h5>
                            <ul>
                                <li><a href="about01.html">About 1</a>
                                </li>
                                <li><a href="about02.html">About 2</a>
                                </li>
                                <li><a href="login.html">Login</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 menuimg"> <img src="assets/images/blog_listed1.jpg" alt="" class="img-responsive"> </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="shop-grid.html">Men</a>
        </li>
        <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SHOP</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">our fashion shop</h5>
                            <ul>
                                <li class="active"><a href="home01.html">Home Website</a>
                                </li>
                                <li><a href="about01.html">About Us</a>
                                </li>
                                <li><a href="shop-grid.html">Fashion Trends</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">Men's Wear</h5>
                            <ul>
                                <li><a href="shop-grid.html">Shorts<span class="sell">Sell</span></a>
                                </li>
                                <li><a href="shop-grid.html">Suits & Blazers</a>
                                </li>
                                <li><a href="shop-grid.html">Swimwear</a>
                                </li>
                                <li><a href="shop-grid.html">Trousers & Chinos<span class="new">New</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h5 class="title">Women's Wear</h5>
                            <ul>
                                <li><a href="shop-grid.html">Jackets<span class="sell">Sell</span></a>
                                </li>
                                <li><a href="shop-grid.html">Bouses</a>
                                </li>
                                <li><a href="shop-grid.html">Night Wear<span class="hot">Hot</span></a>
                                </li>
                                <li><a href="shop-grid.html">Jeans & Trousers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 menuimg"> <img src="assets/images/blog_listed1.jpg" alt="" class="img-responsive"> </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="shop-grid.html">Women</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('events') }}">Wheel of fortune</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->