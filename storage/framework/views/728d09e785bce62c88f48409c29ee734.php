

<?php $__env->startSection('container'); ?>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="<?php echo e(asset('storage/' . $product->image->image1)); ?>" alt="" width="100%" id="mainImg" />
            <div class="small-img-group">
                <?php for($i = 1; $i < 6; $i++): ?>
                    <?php if($product->image['image' . $i] != null): ?>
                        <div class="small-img-col">
                            <img src="<?php echo e(asset('storage/' . $product->image['image' . $i])); ?>" alt=""
                                class="small-img" />
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
                <div class="small-img-col">
                    <img src="<?php echo e(asset('storage/' . $product->category->size->image)); ?>" alt="" class="small-img" />
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6><?php echo e($product->category->name); ?></h6>
            <h4><?php echo e($product->title); ?></h4>
            <h2>Rp. <?php echo e($product->price); ?></h2>
            <h4>Product Details</h4>
            <span><?php echo e($product->desc); ?></span>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/js/product.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bahasa pemrograman\laravel\klotsfashion\resources\views/product.blade.php ENDPATH**/ ?>