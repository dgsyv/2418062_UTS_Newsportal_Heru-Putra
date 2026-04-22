<?php $__env->startSection('title', 'Edit Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Berita: <?php echo e($news->title); ?></h3>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.news.update', $news->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"
                            <?php echo e($news->category_id == $cat->id ? 'selected' : ''); ?>>
                            <?php echo e($cat->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $news->title)); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ringkasan</label>
                <textarea name="excerpt" class="form-control"><?php echo e(old('excerpt', $news->excerpt)); ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea name="content" class="form-control" rows="10" required><?php echo e(old('content', $news->content)); ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <?php if($news->image): ?>
                    <div class="mb-2">
                        <img src="<?php echo e(asset('storage/'.$news->image)); ?>" width="200">
                    </div>
                <?php endif; ?>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('admin.news.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.admin.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/admin/edit.blade.php ENDPATH**/ ?>