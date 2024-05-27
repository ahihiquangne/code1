<?php $__env->startSection('content'); ?>
<?php if(session('notif')): ?>
<div class="alert alert-success">
	<?php echo e(session('notif')); ?>

</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items">
				<h2 class="title text-center post__title">Danh sách Thông Báo</h2>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="post__content">
						<div class="post__icon">		
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pied-piper-pp" class="svg-inline--fa fa-pied-piper-pp fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M205.3 174.6c0 21.1-14.2 38.1-31.7 38.1-7.1 0-12.8-1.2-17.2-3.7v-68c4.4-2.7 10.1-4.2 17.2-4.2 17.5 0 31.7 16.9 31.7 37.8zm52.6 67c-7.1 0-12.8 1.5-17.2 4.2v68c4.4 2.5 10.1 3.7 17.2 3.7 17.4 0 31.7-16.9 31.7-37.8 0-21.1-14.3-38.1-31.7-38.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zM185 255.1c41 0 74.2-35.6 74.2-79.6 0-44-33.2-79.6-74.2-79.6-12 0-24.1 3.2-34.6 8.8h-45.7V311l51.8-10.1v-50.6c8.6 3.1 18.1 4.8 28.5 4.8zm158.4 25.3c0-44-33.2-79.6-73.9-79.6-3.2 0-6.4.2-9.6.7-3.7 12.5-10.1 23.8-19.2 33.4-13.8 15-32.2 23.8-51.8 24.8V416l51.8-10.1v-50.6c8.6 3.2 18.2 4.7 28.7 4.7 40.8 0 74-35.6 74-79.6z"></path></svg>
						</div>
                    	<a class="post__text" href="posts/<?php echo e($post->id); ?>/<?php echo e($post->slug); ?>.html"><p><?php echo e($post->title); ?></p></a>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($posts->links()); ?>

			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric-store\resources\views/post/index.blade.php ENDPATH**/ ?>