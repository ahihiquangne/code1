<!DOCTYPE html>
<html>

<head>
    <title>Create product</title>
    <base href="<?php echo e(asset('admin_asset')); ?>">
    <link href="../admin_asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../admin_asset/css/bootstrap-4.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 13px;
            line-height: 1.4;
            background: #eee;
        }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
        }

        .main-content {
            padding-top: 25px;
            padding-left: 25px;
            padding-right: 25px;
        }

        * {
            box-sizing: border-box;
        }

        .splash-container {
            max-width: 401px;
            margin: 50px auto;
        }

        div {
            display: block;
        }

        .splash-container .panel {
            margin-bottom: 30px;
        }

        .panel-border-color-primary {
            border-top-color: #4285f4;
        }

        .panel {
            background-color: #ffffff;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.04);
            border-width: 0;
            border-radius: 3px;
        }

        .panel-default {
            border-color: #ddd;
        }

        .splash-container .panel-heading {
            text-align: center;
            margin-bottom: 20px;
            padding-top: 40px;
            padding-bottom: 0px;
        }

        .panel-heading {
            font-size: 18px;
            font-weight: 300px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 10px;
            margin: 0px 20px;
            border-bottom-width: 0px;
            border-radius: 3px 3px 0 0;
        }

        .splash-description {
            text-align: center;
            display: block;
            line-height: 20px;
            font-size: 20px;
            color: #5a5a5a;
            margin-top: -20px;
            padding-bottom: 10px
        }

        .splash-container .panel .panel-body {
            padding: 20px 30px 15px;
        }

        .panel-body {
            border-radius: 0 0 3px 3px;
        }

        .form-control {
            border-width: 1px;
            border-top-color: #bdc0c7;
            box-shadow: none;
            padding: 10px 12px;
            font-size: 15px;
            transition: none;
            display: block;
            width: 100%;
            height: 48px;
            line-height: 1.5;
            background-color: #fff;
            border: 1px solid #d5d8de;
            border-radius: 2px;
        }

        .btn-xl {
            padding: 0px 12px;
            font-size: 15px;
            line-height: 43px;
            border-radius: 3px;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #4285f4;
        }

        .login-submit .btn {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid main-content">
        <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading">
                    <span class="splash-description">Tạo sản phẩm</span>
                </div>
                <div class="panel-body">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-warning"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(session('thongbao')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('products.store')); ?>" method="POST" role="form" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h6 for="category_id">Loại sản phẩm:</h6>
                            <select class="form-control" name="category_id">
                                <option value="">---</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6 for="brand_id">Thương hiệu:</h6>
                            <select class="form-control" name="brand_id">
                                <option value="">---</option>
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" placeholder="Nhập tên của sản phẩm" class="form-control" name="name"
                                required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="decription">Mô tả:</label>
                            <textarea rows="4" cols="50" name="decription" class="form-control" 
                                placeholder="Nhập thông tin của sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Số lượng:</label>
                            <input type="text" class="form-control" placeholder="Nhập số lượng của sản phẩm"
                                class="form-control" name="quantity">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Size:</label>
                            <input type="text" class="form-control" placeholder="size sản phẩm"
                                class="form-control" name="size">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá:</label>
                            <input type="text" placeholder="Nhập giá của sản phẩm" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount:</label>
                            <input type="text" placeholder="Nhập discount" class="form-control" name="discount">
                        </div>
                        <div class="form-group login-submit">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Tạo sản phẩm</button>
                            <a href="admin/products" class="btn btn-default btn-xl"> Quay lại </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\electric-store\resources\views/admin/product/create.blade.php ENDPATH**/ ?>