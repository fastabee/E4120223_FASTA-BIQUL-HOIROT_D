<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Perpustakaan</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('template')); ?>/img/brand/favicon.png" type="image/png">

    <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/css/argon.css?v=1.2.0" type="text/css">

    
    <link rel="stylesheet" href="<?php echo e(asset('sweetalert2.min.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('materialdesignicons.min.css')); ?>">
    
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>


    <body>
        
        
    
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  align-items-center">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="<?php echo e(asset('template')); ?>/img/brand/blue.png" class="navbar-brand-img" alt="...">
                    </a>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    
                    <ul class="navbar-nav">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>"
                                href="<?php echo e(route('dashboard')); ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        
                    
                        <?php if(auth()->guard()->check()): ?>
                        
                        <?php if(Auth::user()->level == 'admin'): ?>  
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('buku') ? 'active' : ''); ?>"
                                href="<?php echo e(route('buku.index')); ?>">
                                <i class="ni ni-books text-green"></i>
                                <span class="nav-link-text">Buku</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('anggota') ? 'active' : ''); ?>"
                                href="<?php echo e(route('anggota.index')); ?>">
                                <i class="ni ni-single-02 text-orange"></i>
                                <span class="nav-link-text">Anggota</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->level == 'admin' || Auth::user()->level == 'user'): ?>
                            
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('transaksi') ? 'active' : ''); ?>"
                                href="<?php echo e(route('transaksi.index')); ?>">
                                <i class="ni ni-ruler-pencil text-red"></i>
                                <span class="nav-link-text">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('riwayat') ? 'active' : ''); ?>"
                                href="<?php echo e(route('riwayat.index')); ?>">
                                <i class="ni ni-support-16 text-purple"></i>
                                <span class="nav-link-text">Riwayat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('laporan') ? 'active' : ''); ?>"
                                href="<?php echo e(route('laporan.index')); ?>">
                                <i class="ni ni-single-copy-04 text-cyan"></i>
                                <span class="nav-link-text">Laporan</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <?php if(auth()->guard()->check()): ?>
                    <ul class="navbar-nav align-items-center ml-md-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder"
                                            src="<?php echo e(asset('template')); ?>/img/theme/team-4.jpg">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold"><?php echo e(Auth::user()->name); ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">

                                    <a href="<?php echo e(route('petugas.index')); ?>" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>Settings</span>
                                    </a>
                                    
                                    
                    
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <i class="ni ni-bold-right"></i> <span><?php echo e(__('Logout')); ?></span>
                                        </a>
                                        
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                        
                                
                                </div>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <?php echo $__env->yieldContent('content'); ?>
                    <?php echo $__env->yieldContent('modal'); ?>
                </div>
                
                
            </div>
        </div>
        
        
    </div>
    
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?php echo e(asset('template')); ?>/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(asset('template')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('template')); ?>/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?php echo e(asset('template')); ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?php echo e(asset('template')); ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?php echo e(asset('template')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('template')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?php echo e(asset('template')); ?>/js/argon.js?v=1.2.0"></script>
    
    
    <script src="<?php echo e(asset('sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('popper.js')); ?>"></script>
    <script src="<?php echo e(asset('jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('moment.js')); ?>"></script>    

    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH D:\kuliah\Laravel\perpustakaan_laravel-main\resources\views/layouts/master.blade.php ENDPATH**/ ?>