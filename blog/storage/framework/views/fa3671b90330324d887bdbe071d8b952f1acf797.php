<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>

        <?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>

</html><?php /**PATH /home/nico/projetoLaravel/nafoto/nafoto/resources/views/principal.blade.php ENDPATH**/ ?>