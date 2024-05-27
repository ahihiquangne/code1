<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>
                        <?php echo $post->body; ?>

                    </p>
                    <hr />
                    <h4>Bình luận</h4>

                    <?php echo $__env->make('post.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <hr />
                    <h5>Add comment</h5>
                    <form method="post" action="<?php echo e(route('comments.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <textarea class="form-control" name=body></textarea>
                            <input type=hidden name=post_id value="<?php echo e($post->id); ?>" />
                        </div>
                        <div class="form-group">
                            <input type=submit class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('widget.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric-store\resources\views/post/show.blade.php ENDPATH**/ ?>