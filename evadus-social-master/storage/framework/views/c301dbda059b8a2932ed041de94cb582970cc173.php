<?php $__env->startSection('content'); ?>
    <div id="content-auth">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-md-6 left-content">section 1</div>
                <div class="col-12 col-lg-4 col-md-6 right-content">
                    <h1>Join <?php echo e(config("app.name")); ?> today</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad autem.</p>
                    <div class="form-content">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(url("login")); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-auth">Log in</button>
                            </div>
                            <div class="form-group">
                                <p>New on <?php echo e(config("app.name")); ?> ? <a href="<?php echo e(url("register")); ?>"> Register now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MahHa\OneDrive\Documents\GitHub\React-and-Laravel\evadus-social-master\resources\views/auth/login.blade.php ENDPATH**/ ?>