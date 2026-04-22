<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-8">

        <?php if($news->count() > 0): ?>
            <?php $first = $news->shift(); ?>

            <!-- Featured -->
            <div class="card mb-4">
                <?php if($first->image): ?>
                    <a href="<?php echo e(route('news.show', $first->slug)); ?>">
                        <img class="card-img-top" src="<?php echo e(asset('storage/'.$first->image)); ?>">
                    </a>
                <?php endif; ?>

                <div class="card-body">
                    <div class="small text-muted"><?php echo e($first->created_at->format('F d, Y')); ?></div>
                    <h2 class="card-title"><?php echo e($first->title); ?></h2>
                    <p class="card-text"><?php echo e($first->excerpt ?? Str::limit($first->content, 150)); ?></p>
                    <a class="btn btn-primary" href="<?php echo e(route('news.show', $first->slug)); ?>">Read more →</a>
                </div>
            </div>

            <!-- List -->
            <div class="row">
                <?php $__currentLoopData = $news->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <?php if($item->image): ?>
                                    <a href="<?php echo e(route('news.show', $item->slug)); ?>">
                                        <img class="card-img-top" src="<?php echo e(asset('storage/'.$item->image)); ?>">
                                    </a>
                                <?php endif; ?>

                                <div class="card-body">
                                    <div class="small text-muted"><?php echo e($item->created_at->format('F d, Y')); ?></div>
                                    <h2 class="card-title h4"><?php echo e($item->title); ?></h2>
                                    <p class="card-text"><?php echo e($item->excerpt ?? Str::limit($item->content, 100)); ?></p>
                                    <a class="btn btn-primary" href="<?php echo e(route('news.show', $item->slug)); ?>">Read more →</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <?php echo e($news->links()); ?>


        <?php else: ?>
            <p>Tidak ada berita.</p>
        <?php endif; ?>

    </div>

    <div class="col-lg-4">

        <!-- Search -->
        <div class="card mb-4">
            <div class="card-header">Search</div>
            <div class="card-body">
                <form>
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search..." />
                        <button class="btn btn-primary">Go!</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <div class="row">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6">
                            <a href="<?php echo e(url('/?category='.$cat->id)); ?>">
                                <?php echo e($cat->name); ?>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/user/index.blade.php ENDPATH**/ ?>