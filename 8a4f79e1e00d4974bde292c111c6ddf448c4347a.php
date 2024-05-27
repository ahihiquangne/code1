<header id="header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-phone"></i> 009991886333</a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> may10@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                    <a href="<?php echo e(asset('/')); ?>"><img src="https://theme.hstatic.net/1000392339/1000510489/14/logo.png?v=3836" 
                        class="" style="width: 139px;"  /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><div class="search_box pull-right">
                        <form class="typeahead" role="search">
                            <input type="search" name="q" class="form-control search-input" placeholder="Type something..." autocomplete="off">
                        </form>
                    </div></li>
                            <li><a href="<?php echo e(asset('/checkout')); ?>"><i class="fa fa-crosshairs"></i>Thanh Toán</a></li>
                            <li><a href="<?php echo e(asset('/cart')); ?>"><i class="fa fa-shopping-cart"></i>Giỏ Hàng (<?php echo e(Cart::count()); ?>)</a></li>
                            <?php if(Auth::user()): ?>
                            <li><a href="#"><i class="fa fa-user"></i><?php echo e(Auth::user()->name); ?></a></li>
                            <li><a href="" onclick="event.preventDefault();
                                document.getElementById('logout').submit();" title="">Đăng xuất</a></li>
                                <form id="logout" action="logout" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php else: ?>
                            <li><a href="login"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row" style="background-color: #151b4e; height: 50px!important; ">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left" >
                        <ul class="nav navbar-nav collapse navbar-collapse">
                        <li style="border-right: 1px solid white" class="dropdown"><a style="color: white; margin-left: 50px; margin-right: 50px; line-height:50px" href="<?php echo e(asset('/')); ?>">Trang chủ</i></a>
                        <li style="border-right: 1px solid white" class="dropdown"><a style="color: white;  line-height:50px; margin-left: 50px; margin-right: 50px" href="<?php echo e(asset('/post')); ?>">Thông Báo<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="post">Thông Báo</a></li>
                            </ul>
                        </li>
                        <li style="border-right: 1px solid white" class="dropdown"><a style="color: white;  line-height:50px; margin-left: 50px; margin-right: 50px" href="<?php echo e(asset('/post')); ?>">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="mapshop">Cửa Hàng</a></li>
                            </ul>
                        </li>
                        <li>
                            <a style="color: white;  line-height:50px; margin-left: 50px; margin-right: 50px" href="<?php echo e(asset('/contact')); ?>">
                                Liên Hệ
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH C:\xampp\htdocs\electric-store\resources\views/widget/dropdown.blade.php ENDPATH**/ ?>