<?php $__env->startSection('title', 'Daftar Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Berita</h3>
        <div class="card-tools">
            <a href="<?php echo e(route('admin.news.create')); ?>" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle"></i> Tambah Berita
            </a>
        </div>
    </div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td>
                            <?php if($item->image): ?>
                                <img src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="<?php echo e($item->title); ?>" width="80" class="img-thumbnail">
                            <?php else: ?>
                                <span class="text-muted">Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->created_at->format('d M Y')); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.news.show', $item->id)); ?>" class="btn btn-sm btn-info" title="Lihat">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="<?php echo e(route('admin.news.edit', $item->id)); ?>" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('admin.news.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center">Belum ada berita.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            <?php echo e($news->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.admin.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/admin/index.blade.php ENDPATH**/ ?>