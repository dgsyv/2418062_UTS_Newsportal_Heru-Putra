<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4" style="max-width:400px; margin:auto;">

        <h4 class="text-center mb-3">Reset Password</h4>

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.reset')); ?>">
            <?php echo csrf_field(); ?>

            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

            <input type="password" name="password" class="form-control mb-3" placeholder="Password Baru" required>

            <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Konfirmasi Password" required>

            <button class="btn btn-primary w-100">Reset Password</button>
        </form>

    </div>
</div>

</body>
</html>
<?php /**PATH D:\laragon\www\PortalNews-part1\resources\views/auth/forgot.blade.php ENDPATH**/ ?>