

<?php $__env->startSection('container'); ?>
    <section id="page-header" style="background-image: url('/assets/banner/b1.jpg');">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section id="title">
        <h4>All Products</h4>
    </section>

    <section id="search-bar" class="">
        <form action="/products" method="get">
            <input type="text" name="search" id="search" placeholder="Search a Specific Products"
                value="<?php echo e(request('search')); ?>">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </section>

    <section id="product1" class="section-p1">
        <?php if($products->count()): ?>
            <div class="pro-container">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/products/<?php echo e($product->slug); ?>" class="pro">
                        <img src="<?php echo e(asset('storage/' . $product->image->image1)); ?>" alt="<?php echo e($product->title); ?>" />
                        <div class="des">
                            <span><?php echo e($product->category->name); ?></span>
                            <h5><?php echo e($product->title); ?></h5>
                            <h4>Rp. <?php echo e($product->price); ?></h4>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        <?php endif; ?>
        <div class="paginate">
            <?php echo e($products->links()); ?>

        </div>
    </section>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bahasa pemrograman\laravel\klotsfashion\resources\views/products.blade.php ENDPATH**/ ?>