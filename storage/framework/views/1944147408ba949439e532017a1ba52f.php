<?php $__env->startSection('title', 'Tambah Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Berita Baru</h3>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.news.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control" required>
                    <option value="" disabled selected>-- Pilih Kategori --</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ringkasan</label>
                <textarea name="excerpt" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea id="summernote" name="content" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 250
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.admin.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/admin/create.blade.php ENDPATH**/ ?>