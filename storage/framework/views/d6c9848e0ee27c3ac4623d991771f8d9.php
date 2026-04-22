<?php $__env->startSection('title', 'Data Kategori'); ?>

<?php $__env->startSection('content'); ?>

<div class="card-header">
    <h3 class="card-title">Data Kategori</h3>

    <a href="<?php echo e(route('admin.category.create')); ?>"
       class="btn btn-primary btn-sm float-end">
        + Tambah Kategori
    </a>
</div>

    <div class="card-body">

        
        <?php if(session('success')): ?>
            <div class="alert alert-success" id="notif">
                <?php echo e(session('success')); ?>

            </div>

            <script>
                setTimeout(() => {
                    document.getElementById('notif').style.display = 'none';
                }, 3000);
            </script>
        <?php endif; ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Nama Kategori</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td><?php echo e($cat->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.category.edit', $cat->id)); ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="<?php echo e(route('admin.category.destroy', $cat->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.admin.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Download\PortalNews-part001\resources\views/admin/category/index.blade.php ENDPATH**/ ?>