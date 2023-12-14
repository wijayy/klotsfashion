

<?php $__env->startSection('container'); ?>
    <section id="page-header" style="background-image: url('assets/banner/b19.jpg')">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>

    <section id="blog">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="blog-box">
                <div class="blog-image">
                    <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="" />
                </div>
                <div class="blog-details">
                    <h4><?php echo e($blog->title); ?></h4>
                    <p><?php echo e($blog->excerpt); ?></p>
                    <a href="#">Continue reading</a>
                </div>
                <h1><?php echo e($blog->created_at->format('d/m')); ?></h1>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bahasa pemrograman\laravel\klotsfashion\resources\views/blogs.blade.php ENDPATH**/ ?>