<?php $__env->startSection('content'); ?>
<?php if(session('notif')): ?>
<div class="alert alert-success">
	<?php echo e(session('notif')); ?>

</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<a href="<?php echo e(asset('?price_desc')); ?>">Lọc</a>
		<div class="col-sm-9 padding-right">
			<div class="features_items">
				<h2 class="title text-center">Sản phẩm</h2>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<a href="product/<?php echo e($product->id); ?>/<?php echo e($product->slug); ?>.html"><img
										src="<?php echo e(asset($product->image)); ?>" alt="" style="width: 250px; height: 350px;" /></a>
								<h2><?php echo e(number_format($product->price)); ?> VNĐ</h2>
								<p><?php echo e($product->name); ?></p>
								<a href="<?php echo e(asset('cart/add/'.$product->id)); ?>" class="btn btn-default add-to-cart">
									<i class="fa fa-shopping-cart"></i>Đặt hàng</a>
							</div>
						</div>
						<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><a href="<?php echo e(asset('wishlist/add/'.$product->id)); ?>"><i 
									class="fa fa-plus-square"></i>Thêm vào danh sách mong muốn</a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($products->links()); ?>

			</div>
			<div class="recommended_items">
				<h2 class="title text-center">Sản phẩm đề xuất</h2>
				<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<?php $__currentLoopData = $productPay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo e(asset($item->image)); ?>" alt="" />
										<h2><?php echo e($item->price); ?></h2>
											<p><?php echo e($item->name); ?></p>
											<a href="" class="btn btn-default add-to-cart"><i 
												class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>

									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
					<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric-store\resources\views/home/index.blade.php ENDPATH**/ ?>