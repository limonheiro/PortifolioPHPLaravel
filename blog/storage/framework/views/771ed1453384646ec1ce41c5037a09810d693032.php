<?php $__env->startSection('content'); ?>
    <?php if( $status == 200 ): ?>
    <article class='blog-post'>
        <?php $__currentLoopData = $body['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <h2 class="blog-post-title"><?php echo e($a['title']); ?></h2>
           <p class="blog-post-meta"><?php echo e($a['publishedAt']); ?> <a href="#"><?php echo e($a['author']); ?></a></p>
           
            <p><?php echo $a['description']; ?>

            <a href="<?php echo e($a['url']); ?>">Ver mais</a>
            </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </article>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nico/projetoLaravel/nafoto/nafoto/resources/views/getnew.blade.php ENDPATH**/ ?>