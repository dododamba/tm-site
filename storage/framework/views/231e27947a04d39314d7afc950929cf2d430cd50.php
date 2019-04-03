<header id="header" class="header">
        
        <div class="header-menu">

            <div class="col-sm-7">
              </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="">

                        <p><small> <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>(<?php echo e(Auth::user()->username); ?>)</small></p>
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?php echo e(route('myprofile')); ?>"><i class="fa fa-user"></i> Mon compte</a>
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>


            </div>
        </div>

    </header>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/partials/top.blade.php */ ?>