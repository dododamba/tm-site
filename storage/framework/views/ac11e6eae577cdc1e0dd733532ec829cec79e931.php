<?php $__env->startSection('title','Accueil'); ?>
<?php $__env->startSection('content'); ?>
    <section id="mu-slider">

        <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="/<?php echo e($item->image); ?>" alt="<?php echo e($item->image); ?>" style="height: 500px;width: 1920px;">
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4></h4>
                <span></span>
                <p><?php echo e($item->texte); ?></p>
                <a href="/<?php echo e($item->lien); ?>" target="_blank" class="mu-read-more-btn">Voir</a>
            </div>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </section>

    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>Innovation</h3>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single"  style="background-color : black;">
                            <span class="fa fa-users"></span>
                            <h3>Responsabilité</h3>

                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single" style="background-color : orange;">
                            <span class="fa fa-table"></span>
                            <h3>Intégrité</h3>

                        </div>

                        <div class="mu-service-single" style="background-color : red;">
                            <span class="fa fa-users"></span>
                            <h3>Esprit d’Equipe</h3>

                        </div>


                        <div class="mu-service-single" style="background-color : #21428f;">
                            <span class="fa fa-users"></span>
                            <h3>Proximité</h3>

                        </div>


                        <div class="mu-service-single" style="background-color : #15B790;">
                            <span class="fa fa-users"></span>
                            <h3>Dynamisme</h3>

                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->

                                <article class="mu-blog-single-item">
                                    <figure class="mu-blog-single-img">
                                        <figcaption class="mu-blog-caption">
                                            <h3><a href="#">Mot du CEO.</a></h3>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-blog-description">
                                        <p><?php echo e($messagebienvenu->message); ?></p>
                                    </div>
                                </article>


                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="<?php echo e(url('front')); ?>/assets/img/courses/1.jpg" alt="img"></a>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h2><a href="#">TECHNO MEGA PARTNERS</a></h2>

                                        <blockquote>
                                            <p><?php echo e($apropos->texte); ?></p>
                                        </blockquote>

                                    </div>
                                </div>




                                <div class="mu-course-container mu-blog-single" style="background-color :#36B5B2;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-title">
                                                <h2  style="color : white;">Nos Services</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mu-related-item">
                                    <h3></h3>
                                    <div class="mu-related-item-area">
                                        <div id="mu-related-item-slide">
                                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-6">
                                                    <article class="mu-blog-single-item">
                                                        <figure class="mu-blog-single-img">
                                                            <a href="#"><img alt="img" src="<?php echo e(url('front')); ?>/assets/img/blog/blog-1.jpg"></a>
                                                            <figcaption class="mu-blog-caption">
                                                                <h3><a href="#"><?php echo e($item->nom); ?></a></h3>
                                                            </figcaption>
                                                        </figure>

                                                        <div class="mu-blog-description">
                                                            <p><?php echo sous_chaine( $item->texte,0,180); ?></p>
                                                            <a href="#" class="mu-read-more-btn">Plus de détail</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="mu-course-container mu-blog-single" style="background-color :#3685B0;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-title">
                                                <h2  style="color : white;">Nos Produits</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mu-related-item">
                                    <h3></h3>
                                    <div class="mu-related-item-area">
                                        <div id="mu-related-item-slide">
                                            <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-6">
                                                    <article class="mu-blog-single-item">
                                                        <figure class="mu-blog-single-img">
                                                            <a href="#"><img alt="img" src="<?php echo e(url('front')); ?>/assets/img/blog/blog-1.jpg"></a>
                                                            <figcaption class="mu-blog-caption">
                                                                <h3><a href="#"><?php echo e($item->nom); ?></a></h3>
                                                            </figcaption>
                                                        </figure>

                                                        <div class="mu-blog-description">
                                                            <p><?php echo sous_chaine( $item->texte,0,180); ?></p>
                                                            <a href="#" class="mu-read-more-btn">Plus de détail</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            



                                <!-- end course content container -->
                            </div>

                            <div class="col-md-3">
                                <!-- start sidebar -->
                            <?php echo $__env->make('front.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- / end sidebar -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>TECHNO MEGA PARTNERS</h2>
                        </div>
                        <!-- end title -->
                        <!-- start messagecontact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <form class="contactform">
                                            <p class="comment-form-author">
                                                <label for="author">Nom et Prénom<span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value="" name="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Sujet</label>
                                                <input type="text" name="subject">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Message</label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Envoyer" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end messagecontact content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/home.blade.php */ ?>