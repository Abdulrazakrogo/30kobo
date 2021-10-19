

<?php $__env->startSection('title'); ?>

Add New Post

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('newpost')); ?>" method="post">

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

<div class="form-group">

<input required="required" value="<?php echo e(old('title')); ?>" placeholder="Enter title here" type="text" name = "title"class="form-control" />

</div>

<div class="form-group">

<textarea name='body'class="form-control"><?php echo e(old('body')); ?></textarea>

</div>

<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>

<input type="submit" name='save' class="btn btn-default" value = "Save Draft" />

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thirtykobo\resources\views/posts/create.blade.php ENDPATH**/ ?>