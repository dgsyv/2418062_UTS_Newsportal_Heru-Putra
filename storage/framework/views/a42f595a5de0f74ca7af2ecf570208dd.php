<?php $__env->startSection('content'); ?>
    <article>
        <h1 class="mt-4"><?php echo e($news->title); ?></h1>
        <p class="lead">
            Dipublikasikan pada <?php echo e($news->created_at->format('d M Y')); ?>

        </p>
        <?php if($news->image): ?>
            <img src="<?php echo e(asset('storage/'.$news->image)); ?>" class="img-fluid rounded mb-4" alt="<?php echo e($news->title); ?>">
        <?php endif; ?>
        <div class="content">
            <?php echo nl2br(e($news->content)); ?>

        </div>
        <div class="mt-4">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">← Kembali ke Beranda</a>
        </div>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/user/show.blade.php ENDPATH**/ ?>