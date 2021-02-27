<!-- main navbar -->
<nav class="navbar main-navbar navbar-expand-sm">
    <a href="/" class="navbar-brand"><?php echo e(config("app.name")); ?></a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <?php if(Auth::check()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/"><i data-feather="home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i data-feather="globe"></i>Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i data-feather="bell"></i>Notifications</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Abouts</a>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav">
            <?php if(Auth::check()): ?>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search on <?php echo e(config("app.name")); ?>">
                    <button class="btn btn-search"><i class="search-icon" data-feather="search"></i></button>
                </form>
            <?php endif; ?>
            <?php if(Auth::check()): ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <div class="user-profile-img">
                            <img src="/uploads/profileimages/<?php echo e(Auth::user()->profile_image); ?>" alt="">
                        </div>
                        <span><?php echo e(Auth::user()->user_name); ?></span>
                        <i data-feather="chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li href="#"><a href="<?php echo e(url("profile", Auth::user()->user_name)); ?>" class="dropdown-item"><i class="icon" data-feather="user"></i>Profile</a></li>
                        <li href="#"><a href="<?php echo e(route("profile.settings")); ?>" class="dropdown-item"><i class="icon" data-feather="settings"></i>Settings</a></li>
                        <div class="dropdown-divider"></div>
                        <li href="#">
                            <form method="POST" action="<?php echo e(url("logout")); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">
                                    <i class="icon" data-feather="log-out"></i>Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url("login")); ?>">Sing in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link signup-btn" href="<?php echo e(url("register")); ?>">Sign up</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<!-- end main navbar -->

<!-- mobile navbar -->
<div class="main-navbar-mobile">
    <div class="container">
        <div class="mobile-navbar">
            <div class="vertical-align-nav">
                <ul class="nav-block-left">
                    <li class="link-btn">
                        <a href="/"><?php echo e(config("app.name")); ?></a>
                    </li>
                </ul>
                <a class="btn-nav-toogle" href="#"><i data-feather="menu"></i></a>
            </div>
            <div class="mobile-nav-block"><!-- open-mobile-nav -->
                <h4>Navigation</h4>
                <a href="#" class="btn-nav-toogle">
                    <i data-feather="x-circle"></i>
                </a>
                <ul class="nav navbar-nav">
                    <?php if(Auth::check()): ?>
                        <li>
                            <a href="/"><i class="icon" data-feather="home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon" data-feather="globe"></i>Discover</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon" data-feather="bell"></i>Notifications</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if(Auth::check()): ?>
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <div class="user-profile-img">
                                    <img src="/uploads/profileimages/<?php echo e(Auth::user()->profile_image); ?>" alt="">
                                </div>
                                <span><?php echo e(Auth::user()->user_name); ?></span>
                                <i data-feather="chevron-down" class="icon"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li href="#"><a href="<?php echo e(url("profile", Auth::user()->user_name)); ?>" class="dropdown-item"><i class="icon" data-feather="user"></i>Profile</a></li>
                                <li href="#"><a href="<?php echo e(route("profile.settings")); ?>" class="dropdown-item"><i class="icon" data-feather="settings"></i>Settings</a></li>
                                <div class="dropdown-divider"></div>
                                <li href="#">
                                    <form method="POST" action="<?php echo e(url("logout")); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button class="dropdown-item" type="submit">
                                            <i class="icon" data-feather="log-out"></i>Sign out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Abouts</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url("login")); ?>" class="log-link"><i class="icon" data-feather="log-in"></i>Sing in</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url("register")); ?>" class="log-link"><i class="icon" data-feather="user-plus"></i>Sign up</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\MahHa\OneDrive\Documents\GitHub\React-and-Laravel\evadus-social-master\resources\views/layouts/_partials/_navbar.blade.php ENDPATH**/ ?>