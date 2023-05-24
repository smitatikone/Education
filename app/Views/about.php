<?= $this->include('default/header') ?>
<?php echo view('default/navbar', array('title' => 'Home')); ?> 

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Current Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-5">
            <h3 class="text-theme-colored mt-0 mt-sm-30 mb-0">Welcome To</h3>
            <h2 class="text-theme-colored2 mt-0">StudyPro University</h2>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="images/about/s1.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Mission</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="images/about/s2.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Activity</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="images/about/s3.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Vission</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-sm-6 mt-30">
               <img src="images/about/dc1.png" alt="">
              </div>
              <div class="col-sm-6">
               <div class="p-30 mt-0 bg-theme-colored">
                <h3 class="title-pattern mt-0"><span class="text-white">Request <span class="text-theme-color-2">Information</span></span></h3>
                <!-- Appilication Form Start-->
                <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/reservation.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <div class="styled-select">
                          <select id="person_select" name="person_select" class="form-control" required="">
                            <option value="">Choose Subject</option>
                            <option value="1 Person">Software Engineering</option>
                            <option value="2 Person">Computer Science engineering</option>
                            <option value="3 Person">Accounting Technologies</option>
                            <option value="Family Pack">BACHELOR`S DEGREE</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Application Form End-->
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-2" data-bg-img="images/bg/bg5.jpg" data-parallax-ratio="0.7">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 mb-50 text-white">We are always ahead <br> Professional Education for Your Future.</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Happy Customers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-note2 mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: team -->
    <section id="team">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Our <span class="text-theme-colored2">Teachers</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-1.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Sakib Vettori</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-2.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Maria Vettori</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-3.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Sakib Martin</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-4.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Maria Martin</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <?= $this->include('default/footer') ?>