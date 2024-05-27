<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Loại sản phẩm</h4>
    <a href="admin/category/create" type="button" class="btn btn-sm btn-primary">Thêm loại sản phẩm mới</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">Name</th>
                <th style="width: 5%; text-align: center;">Image</th>
                <th style="width: 15%; text-align: center;">Detail</th>
                <th style="width: 15%; text-align: center;">Keyword</th>
                <th style="width: 25%; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="width: 5%;" class="text-center"><span class="badge ">
                <?php echo e($category->name); ?></span></td>
                <td style="width: 5%;" class="text-center"><img width="150px" src="<?php echo e(asset('../public/admin_asset/img/category/'.$category->image)); ?>" alt=""></td>
                <td style="width: 15%;" class="text-center"><span class="badge" 
                style ="white-space: nowrap; width: 200px; border: 1px solid #000000;
                 overflow: hidden; text-overflow: clip;">
                <?php echo e($category->detail); ?></span></td>
                <td style="width: 15%;" class="text-center"><span class="badge ">
                <?php echo e($category->keyword); ?></span></td>
                <td style="width: 25%;">
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('category.show', $category->id)); ?>" title="">Xem</a>
                <?php if(Auth::user()->level==1 || Auth::user()->level==2): ?>
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('category.edit', $category->id)); ?>" title="">Sửa</a>
                <?php endif; ?>
                <?php if(Auth::user()->level==2): ?>
                <form action="<?php echo e(route('category.destroy', $category->id)); ?>" class="form-delete" role="form" method="post" style="display: inline">
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

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebShoes\WebBanGiay\resources\views/admin/category/index.blade.php ENDPATH**/ ?>