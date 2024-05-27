<?php echo $__env->make('widget.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0">
    </script>
    <?php echo $__env->make('widget.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="col-sm-1"></div>
                            <div class="item active col-sm-10">
                                <img src="https://theme.hstatic.net/1000392339/1000510489/14/ms_banner_img2.jpg?v=3836"
                                    class="girl img-responsive" alt="" />
                            </div>
                            <div class="item col-sm-12">
                                <div class="col-sm-1"></div>
                                <img src="https://theme.hstatic.net/1000392339/1000510489/14/ms_banner_img3.jpg?v=3836"
                                    class="girl img-responsive" alt="" />
                            </div>
                            <div class="item col-sm-12">
                                <div class="col-sm-1"></div>
                                <img src="https://theme.hstatic.net/1000392339/1000510489/14/ms_banner_img1.jpg?v=3836"
                                    class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Loại sản phẩm</h2>
            <div class="panel-group category-products" id="accordian">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a
                                href="<?php echo e(asset('category/'.$category->id.'/'.$category->slug.'.html')); ?>"><?php echo e($category->name); ?></a>
                        </h4>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="brands_products">
                <h2>Thương hiệu</h2>
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(asset('brand/'.$brand->id.'/'.$brand->slug.'.html')); ?>"><?php echo e($brand->name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('widget.endoffile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('widget.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\electric-store\resources\views/widget/index.blade.php ENDPATH**/ ?>