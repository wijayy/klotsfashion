

<?php $__env->startSection('container'); ?>
    <section id="hero" style="background-image: url('assets/hero.png');">
        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On all products</h1>
        <p>save with mode coupons & up to 70% off!</p>
        <button style="    background-image: url('assets/button.png');">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="feature-box">
            <img src="/assets/features/f1.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f2.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f3.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f4.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f5.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f6.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Improve your style with Klots Fashions</p>
        <?php if($recomendations->count()): ?>
            <div class="pro-container">
                <?php $__currentLoopData = $recomendations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recomendation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/products/<?php echo e($recomendation->slug); ?>" class="pro">
                        <img src="<?php echo e(asset('storage/' . $recomendation->image->image1)); ?>"
                            alt="<?php echo e($recomendation->title); ?>" />
                        <div class="des">
                            <span><?php echo e($recomendation->category->name); ?></span>
                            <h5><?php echo e($recomendation->title); ?></h5>
                            <h4>Rp. <?php echo e($recomendation->price); ?></h4>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        <?php endif; ?>
    </section>


    <section id="banner" class="section-m1" style="background-image: url('assets/banner/b2.jpg');">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> | All T-Shirts & Accesories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Colections New Modern Design</p>
        <?php if($newA->count()): ?>
            <div class="pro-container">
                <?php $__currentLoopData = $newA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/products/<?php echo e($new->slug); ?>" class="pro">
                        <img src="<?php echo e(asset('storage/' . $new->image->image1)); ?>" alt="<?php echo e($new->title); ?>" />
                        <div class="des">
                            <span><?php echo e($new->category->name); ?></span>
                            <h5><?php echo e($new->title); ?></h5>
                            <h4>Rp. <?php echo e($new->price); ?></h4>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bahasa pemrograman\laravel\klotsfashion\resources\views/index.blade.php ENDPATH**/ ?>