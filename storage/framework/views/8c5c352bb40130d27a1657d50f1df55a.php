<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('layouts.user.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <body>
        <?php echo $__env->make('layouts.user.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- Side widgets (tetap statis seperti aslinya) -->
                <div class="col-lg-4">
                    <!-- Search widget -->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term...">
                                <button class="btn btn-primary" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
        
                    <!-- Side widget -->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <?php echo $__env->make('layouts.user.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </body>
</html>
<?php /**PATH E:\Download\PortalNews-part001\resources\views/layouts/user/master.blade.php ENDPATH**/ ?>