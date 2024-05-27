<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">Name</th>
                <th style="width: 15%; text-align: center;">Email</th>
                <th style="width: 15%; text-align: center;">Địa chỉ</th>
                <th style="width: 25%; text-align: center;">Điện thoại</th>
                <th style="width: 25%; text-align: center;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="width: 5%;" class="text-center"><span >
                <?php echo e($customer->name); ?></span></td>
                <td style="width: 15%;" class="text-center"><span class="badge" 
                style ="white-space: nowrap; width: 200px; border: 1px solid #000000;
                 overflow: hidden; text-overflow: clip;">
                <?php echo e($customer->email); ?></span></td>
                <td style="width: 15%;" class="text-center"><span >
                <?php echo e($customer->address); ?></span></td>
                <td style="width: 15%;" class="text-center"><span >
                <?php echo e($customer->phone_number); ?></span></td>
                <td style="width: 25%;">
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('customers.show', $customer->id)); ?>" title="">Xem</a>
                <?php if(Auth::user()->level==1 || Auth::user()->level==2): ?>
                <a class="btn btn-sm btn-primary" href="<?php echo e(route('customers.edit', $customer->id)); ?>" title="">Sửa</a>
                <?php endif; ?>
                <?php if(Auth::user()->level==2): ?>
                <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" class="form-delete" role="form" method="post" style="display: inline">
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

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric-store\resources\views/admin/customer/index.blade.php ENDPATH**/ ?>