<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User</h6>
    <a href="admin/users/create" type="button" class="btn btn-sm btn-primary">Thêm Tài Khoản</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">Name</th>
                <th style="width: 15%; text-align: center;">Email</th>
                <th style="width: 15%; text-align: center;">Giới tính</th>
                <th style="width: 25%; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="width: 5%;" class="text-center"><span class="badge ">
                <?php echo e($user->name); ?></span></td>
                <td style="width: 5%;" class="text-center"><span class="badge ">
                <?php echo e($user->email); ?></span></td>
                <td style="width: 15%;" class="text-center"><span class="badge ">
                <?php if($user->gender == 1): ?>Nam <?php else: ?> Nữ <?php endif; ?></span></td>
                <td style="width: 10%;">
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('users.show', $user->id)); ?>" title="">Xem</a>
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('users.edit', $user->id)); ?>" title="">Sửa</a>
                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" class="form-delete" role="form" method="post" style="display: inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                      <input type="submit" value="Xóa" class="btn btn-sm btn-danger">
                </form>
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

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/admin/user/index.blade.php ENDPATH**/ ?>