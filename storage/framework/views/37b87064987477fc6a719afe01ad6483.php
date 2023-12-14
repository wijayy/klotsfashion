<section id="header">
  <a href="#">
    <img src="img/logo.png" class="logo" alt="" />
  </a>
  <div class="">
    <ul class="navbar">
      <li><a href="/" class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">Home</a></li>
      <li><a href="/products" class="<?php echo e(Request::is('product*') ? 'active' : ''); ?>">Product</a></li>
      <li><a href="/blogs" class="<?php echo e(Request::is('blog*') ? 'active' : ''); ?>">Blog</a></li>
      <li><a href="/about" class="<?php echo e(Request::is('about') ? 'active' : ''); ?>">About</a></li>
      <li><a href="/contact" class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>">Contact</a></li>
      <?php if(auth()->guard()->check()): ?>
        <li class="">
          <i class="bx bx-user user"></i>
          <ul class="dash-box">
            <li><a href="#">Dashboard</a></li>
            <li>
              <form action="/logout" method="post">
                <button type="submit" class="logout">
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      <?php endif; ?>

      <!-- <a href="#" id="close"><i class="bx bx-x"></i></a> -->
    </ul>
  </div>
  <div class="mobile">
    
    <i id="bar" class="bx bx-menu"></i>
  </div>
</section>
<?php /**PATH D:\bahasa pemrograman\laravel\klotsfashion\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>