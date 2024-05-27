<?php $__env->startSection('content'); ?>
<style>
    ul {
        text-decoration: none;
        list-style-type: none;
    }
    ul li {
        text-decoration: none;
        list-style: none;
    }
</style>
<div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
    <h1>User ID: <?php echo e($user->id); ?></h1>
    <ul>
        <li>Name: <?php echo e($user->name); ?></li>
        <li>Email: <?php echo e($user->email); ?></li>
        <li>Giới tính: <?php if($user->gender == 1): ?>Nam <?php else: ?> Nữ <?php endif; ?></li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric-store\resources\views/admin/user/show.blade.php ENDPATH**/ ?>