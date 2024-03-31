<!DOCTYPE html>
<php lang="en" dir="lrt">

<meta http-equiv="content-type" content="text/php;charset=utf-8" />
<head>
<?php include('include/head.php');  ?>
  </head>
  <body>
    <div class="loading-page" id="preloader-active">
      <div class="counter">
          <p class="text text-capitalize">loading</p>
          <span class="number">0%</span>
          <span class="line"></span>
      </div>
    </div>
    <?php include('include/header.php');  ?>
    <main>
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">contact</a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">contact us</h1>
          </div>
        </div>
      </section>
 
 <!-- Contact area S t a r t-->
 <div class="volunteer-details top-bottom-padding2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="contact-section">
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Phone</p>
                      <a class="title" href="javascript:void(0)">+91 9810889180</a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-mail-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Email</p>
                      <a class="title" href="javascript:void(0)">autopariwar@gmail.com</a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Location</p>
                      <a class="title" href="javascript:void(0)">View on Google Map</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="top-padding4">
            <div class="row gy-24">
              <div class="col-xl-6">
                <div class="send-box">
                  <form action="https://charitfix.vercel.app/theme/contact-us.html" class="custom-form">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput1">Full Name</label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Alex Jordan">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput5">Phone</label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput5" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2">Email address</label>
                          <input type="email" class="form-control custom-input" id="exampleFormControlInput2" placeholder="name@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                        <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control custom-textarea" id="exampleFormControlTextarea1" placeholder="Type You message here"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-6">
                <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2938.5634152857547!2d77.09975835732624!3d28.851941488735434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sFlat%20No.%2077%2C%20Pkt-7%2C%20Sector-A%2F6%2C%20DDA%2C%20Flates%20Narela%2C%20Delhi%20-%2011004!5e0!3m2!1sen!2sin!4v1711797411306!5m2!1sen!2sin" width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End-of contact-->
   

<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <!-- donate S t a r t -->

    
      <!-- End-of Gallery -->
    </main>
    <!-- Footer S t a r t -->
    <?php include('include/footer.php'); ?>    
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
      <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
  </body>

</html>
