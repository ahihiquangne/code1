<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="display-comment" <?php if($comment->parent_id != null): ?> style="margin-left:40px;" <?php endif; ?>>
        <strong><?php echo e($comment->user->name); ?></strong>
        <p><?php echo e($comment->body); ?></p>
        <a href="" id="reply"></a>
        <form method="post" action="<?php echo e(route('comments.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type=text name=body class="form-control" />
                <input type=hidden name=post_id value="<?php echo e($post_id); ?>" />
                <input type=hidden name=parent_id value="<?php echo e($comment->id); ?>" />
            </div>
            <div class="form-group">
                <input type=submit class="btn btn-warning" value="Reply" />
            </div>
        </form>
        <?php echo $__env->make('post.commentsDisplay', ['comments' => $comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/post/commentsDisplay.blade.php ENDPATH**/ ?>