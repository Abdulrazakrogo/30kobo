
<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if( !$posts->count() ): ?>
There is no post till now. Login and write a new post now!!!
<?php else: ?>
<div class="">
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="list-group">
    <div class="list-group-item">
      <h3><a href="<?php echo e(url('/'.$post->slug)); ?>"><?php echo e($post->title); ?></a>
        <?php if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin())): ?>
          <?php if($post->active == '1'): ?>
          <button class="btn" style="float: right"><a href="<?php echo e(url('edit/'.$post->slug)); ?>">Edit Post</a></button>
          <?php else: ?>
          <button class="btn" style="float: right"><a href="<?php echo e(url('edit/'.$post->slug)); ?>">Edit Draft</a></button>
          <?php endif; ?>
        <?php endif; ?>
      </h3>
      <p><?php echo e($post->created_at->format('M d,Y \a\t h:i a')); ?> By <a href="<?php echo e(url('/user/'.$post->author_id)); ?>"><?php echo e($post->author->name); ?></a></p>
    </div>
    <div class="list-group-item">
      <article>
        <?php echo Str::limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>'); ?>

      </article>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php echo $posts->render(); ?>

</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thirtykobo\resources\views/posts/index.blade.php ENDPATH**/ ?>