<?php echo $__env->make('widget.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('widget.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Ảnh sản phẩm</td>
                        <td class="description">Tên</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số Lượng</td>
                        <td class="total">Tổng</td>
                        
                        <td class="action">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="cart_product">
                            <img src="<?php echo e(asset($cart->options->image)); ?>" alt="" width=110px, height=110px />
                        </td>
                        <td class="cart_description">
                            <h4><a href=""><?php echo e($cart->name); ?></a></h4>
                        </td>
                        <td class="cart_price">
                            <p><?php echo e(number_format($cart->price)); ?> VNĐ</p>
                        </td>
                        <td class="cart_quantity">
                            <input type="number" class="form-sm-controll" min="1" max="<?php echo e($cart->options->qty_pro); ?>" value="<?php echo e($cart->qty); ?>"
                                    onchange="updateCart(this.value, '<?php echo e($cart->rowId); ?>')">
                        </td>
                        <td class="cart_price">
                            <p class="price"><?php echo e(number_format($cart->price*$cart->qty,0,',','.')); ?> VNĐ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" style="text-" href="<?php echo e(asset('cart/delete/'.$cart->rowId)); ?>">
                                <i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a class="btn btn-default check_out" href="<?php echo e(asset('/checkout')); ?>">Đặt hàng</a>
        </div>
    </div>
</section>
<?php echo $__env->make('widget.endoffile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('widget.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\WebShoes\WebBanGiay\resources\views/home/cart.blade.php ENDPATH**/ ?>