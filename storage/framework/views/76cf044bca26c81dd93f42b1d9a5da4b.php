<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Start Bootstrap</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog</a>
                </li>

                
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

                
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>

<!-- Page header -->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<?php /**PATH E:\Download\PortalNews-part001\resources\views/layouts/user/navbar.blade.php ENDPATH**/ ?>