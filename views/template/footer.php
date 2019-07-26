<!-- Footer Area Start -->
<footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="assets/img/core-img/conecta-letra-branca.png" alt=""></a>
                        <!-- <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p> -->

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/conectacc" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="https://www.instagram.com/conectaufrrj" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="https://twitter.com/conectaufrrj" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Realização</h5>

                    <!-- Footer Gallery -->
                    <div class="footer-gallery">
                      <div class="row">
                        <div class="col-6">
                          <img src="assets/img/bg-img/dasi.png" alt="">
                        </div>
                        <div class="col-6">
                          <img src="assets/img/bg-img/22.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Contato</h5>

                        <!-- Contact Area -->
                        <div class="footer-contact-info">
                            <p><i class="zmdi zmdi-map"></i> Universidade Federal Rural do Rio de Janeiro<br />
                              BR-465, Km 7 Seropédica-Rio de Janeiro<br />
                              CEP: 23.897-000</p>
                            <p><i class="zmdi zmdi-email"></i> conectaufrrj@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and edited by Max Santos and Ismael Hugo
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="<?php echo BASE_URL ?>/assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="<?php echo BASE_URL ?>/assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo BASE_URL ?>/assets/js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="<?php echo BASE_URL ?>/assets/js/confer.bundle.js"></script>
<!-- Active -->
<script src="<?php echo BASE_URL ?>/assets/js/default-assets/active.js"></script>

<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $(".classynav").find('a').on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script>

</body>

</html>
