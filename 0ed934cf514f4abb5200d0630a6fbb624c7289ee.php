<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa Sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <form action="<?php echo e(route('products.update',$product->id)); ?>" role="form" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($product->name); ?>">
            </div>
            <div class="form-group">
                <label for="decription">Decription</label>
                <input type="text" name="decription" class="form-control" value="<?php echo e($product->decription); ?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" value="<?php echo e($product->quantity); ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="<?php echo e($product->price); ?>">
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="text" name="discount" class="form-control" value="<?php echo e($product->discount); ?>">
            </div>
            <div class="form-group">
                <label for="hot">Hot</label>
                <input type="text" name="hot" class="form-control" value="<?php echo e($product->hot); ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="<?php echo e($product->status); ?>">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <select name="brand_id" class="form-control">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>