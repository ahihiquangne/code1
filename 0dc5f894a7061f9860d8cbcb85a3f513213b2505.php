<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 padding-right">
            <div class="features_items">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="product/<?php echo e($product->id); ?>/<?php echo e($product->slug); ?>.html"><img
                                        src="<?php echo e(asset($product->image)); ?>" alt="" style="width: 250px; height: 350px;"/></a>
                                <h2><?php echo e(number_format($product->price)); ?> VNĐ</h2>
                                <p><?php echo e($product->name); ?></p>
                                <p><a href="<?php echo e(asset('cart/add/'.$product->id)); ?>">Đặt hàng</a></p>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="<?php echo e(asset('wishlist/add/'.$product->id)); ?>"><i 
                                    class="fa fa-plus-square"></i>Thêm vào giở hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/home/detail_category.blade.php ENDPATH**/ ?>