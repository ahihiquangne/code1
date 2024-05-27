<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Thương hiệu</h4>
    <a href="admin/brands/create" type="button" class="btn btn-sm btn-primary">Thêm thương hiệu mới</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">Name</th>
                <th style="width: 15%; text-align: center;">Content</th>
                <th style="width: 25%; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="width: 5%;" class="text-center"><span class="badge ">
                <?php echo e($brand->name); ?></span></td>
                <td style="width: 15%;" class="text-center"><span class="badge" 
                style ="white-space: nowrap; width: 200px; border: 1px solid #000000;
                 overflow: hidden; text-overflow: clip;">
                <?php echo e($brand->content); ?></span></td>
                <td style="width: 10%;">
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('brands.show', $brand->id)); ?>" title="">Xem</a>
                <?php if(Auth::user()->level==1 || Auth::user()->level==2): ?>
                  <a class="btn btn-sm btn-primary" href="<?php echo e(route('brands.edit', $brand->id)); ?>" title="">Sửa</a>
                <?php endif; ?>
                <?php if(Auth::user()->level==2): ?>
                <form action="<?php echo e(route('brands.destroy', $brand->id)); ?>" class="form-delete" role="form" method="post" style="display: inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                      <input type="submit" value="Xóa" class="btn btn-sm btn-danger">
                </form>
                <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/admin/brand/index.blade.php ENDPATH**/ ?>