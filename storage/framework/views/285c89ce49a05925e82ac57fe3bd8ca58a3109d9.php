<div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
            <a href="index.html">
                <h1>TMPARTNERS</h1>
                <span>Admin Panel</span>
            </a>
        </div>


    </div>
    <div class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="<?php echo e(url('image')); ?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-picture-o"></i></a>

                    <ul class="dropdown-menu">

                        <li>
                            <a href="<?php echo e(url('image')); ?>"><i class="fa fa-lg fa-fw fa-list nav_icon nav_icon"></i>Gallerie</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('image/create')); ?>"><i class="fa fa-lg fa-fw fa-list nav_icon"></i> Ajouter</a></li>
                    </ul>

                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new notification</h3>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 8 pending task</h3>
                            </div>
                        </li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all pending tasks</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                            <div class="user-name">
                                <p><small> <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>(<?php echo e(Auth::user()->username); ?>)</small></p>
                                <span><?php echo e(Auth::user()->roles->name); ?></span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="<?php echo e(route('myprofile')); ?>"><i class="fa fa-user"></i> Mon Compte</a> </li>
                        <li> <a href="#"><i class="fa fa-cog"></i> Paramètres</a> </li>
                        <li> <a href=" <?php echo e(route('logout')); ?>"><i class="fa fa-sign-out"></i> Deconnecter</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>

<?php /* /home/devtools/PHP/tmpsite/resources/views/partials/top.blade.php */ ?>