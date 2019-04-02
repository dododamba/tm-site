<!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p> <?php echo e($contact->adresse); ?> </p>
                  <p> Telephone : <?php echo e($contact->telephone); ?> </p>
                  <p>Email:  <?php echo e($contact->email); ?> </p>
                </address>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Liens utiles</h4>
                <ul>
                  <li><a href="#">A Propos</a></li>
                  <li><a href="">Services & Produits</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Politique</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letters</h4>
                <p>Récevez des nouvelles de notre</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Suscrire!</button>
                </form>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Plan</h4>
                <iframe src="https://www.google.com/maps/place/0%C2%B024'40.5%22N+9%C2%B027'42.3%22E/@0.41124,9.4595713,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d0.41124!4d9.46176" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
   
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->

<?php /* /home/devtools/PHP/projects/tmp/resources/views/front/bottom.blade.php */ ?>