<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa Category</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="<?php echo e(route('category.update',$category->id)); ?>" role="form" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($category->name); ?>">
    </div>
    <div class="form-group">
        <label for="name">Image</label>
        <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Detail</label>
        <input type="text" name="detail" class="form-control" value="<?php echo e($category->detail); ?>">
    </div>
    <div class="form-group">
        <label for="address">Keyword</label>
        <input type="text" name="keyword" class="form-control" value="<?php echo e($category->keyword); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\xshop\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>