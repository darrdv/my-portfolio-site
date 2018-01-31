<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name', 'Darren De Vouge')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">



    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->

</head>

<body>
  <header>
    <!-- ************ NAV ************ -->
    <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
             </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                     <li><a class="page-scroll" href="#home">HOME</a></li>
                     <li><a class="page-scroll" href="#about-me">ABOUT ME</a></li>
                     <li><a class="page-scroll" href="#portfolio">PORTFOLIO</a></li>
                     <li><a href="http://blog.darrendev.co">MY BLOG</a></li>
                     <li><a class="page-scroll" href="#contact">CONTACT</a></li>
                 </ul>
             </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
     </nav>

     <!-- ************ INTRO ************ -->
     <section id="home">
       <div class="intro">
            <h1>DARREN DE VOUGE</h1>
            <h2>&#60;&#37; Web Developer &#37;&#62;</h2>
            <div class="header-links-content">
              <a href="https://www.facebook.com/darren.devouge" target="_blank"><i class="ion-social-facebook"></i></a>
              <a href="https://twitter.com/darrendev"<i class="ion-social-twitter" ></i>
              <a href="https://www.linkedin.com/in/darrdv/" target="_blank"><i class="ion-social-linkedin"></i></a>
              <a href="https://github.com/darrdv" target="_blank"><i class="ion-social-github"></i></a>
            </div>
            <div class="contact-button">
            <a class="button" href="#contact">GET IN TOUCH</a>
          </div>
        </div>
      </section>

  </header>

  <!-- ************ ABOUT ME ************ -->
  <section id="about-me">

    <div class="container">
        <h1>ABOUT ME</h1>
        <div class="col-sm-4 waypoint-anim-2">
            <div class="about-box">
                <h3>Introduction</h3>
                <hr>
                <p class="about-box-p">My name is Darren, a full stack web developer who loves to create beautiful sites and apps that serve quality purpose.  For me, coding started out as a hobby but became my passion.  In particular, I love the creative thinking and problem solving aspect of coding in web development. </p>
                <h3>More About Me</h3>
                <hr>
                <p >Born and raised in Montreal,  I moved to Toronto with my cat Otis to attend Bitmaker/General Assembly where I learned more about web development than I ever could have picked up on my own.  In my spare time,  I like to try my hand at cooking and working out with my bow flex.  I also enjoy the great outdoors when it's not too cold.</p>
            </div>

        </div>
        <div class="col-sm-4 profile-img waypoint-anim-1">

<img class="img-responsive" src="{{ URL::asset('public/img/darrendev.jpg') }}" />




        </div>
        <div class="col-sm-4">
            <div class="about-box waypoint-anim-3">
                <h3>My Skills</h3>
                <hr>
                    <div class="row">
                      <!-- HTML -->
                        <div class="col-sm-3 skill-header">
                            <p>HMTL</p>
                        </div>
                        <div class="col-sm-8 barprogress">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    90%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <!-- CSS -->
                        <div class="col-sm-3 skill-header">
                            <p>CSS</p>
                        </div>
                        <div class="col-sm-8 barprogress">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="70" style="width: 70%;">
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <!-- Javascript -->
                        <div class="col-sm-3 skill-header">
                            <p>Javascript</p>
                        </div>
                        <div class="col-sm-8 barprogress">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="70" style="width: 70%;">
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <!-- PHP -->
                        <div class="col-sm-3 skill-header">
                            <p>PHP</p>
                        </div>
                        <div class="col-sm-8 barprogress">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                    85%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <!-- Ruby on Rails -->
                        <div class="col-sm-3 skill-header">
                            <p>Ruby&nbsp;on&nbsp;Rails</p>
                        </div>
                        <div class="col-sm-8 barprogress">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                    85%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-box ">
                        <div class="lighter"><h3>Some Tools I Use</h3></div>
                        <hr>
                        <ul class="ul-about">
                            <li>Bootstrap</li>
                            <li>Codeigniter</li>
                            <li>jQuery</li>
                            <li>GIT</li>
                            <li>SASS/LESS</li>
                            <li>Atom</li>
                        </ul>
                    </div>
            </div>


        </div>

    </div>
</section>

  @yield('portfolio');

        <!-- ************ CONTACT ME ************ -->
        <div id="contact">
          <h1>CONTACT ME </h1>
          <div class="container">
              <div class="row">
                  <div class="col-sm-4 quote-position col-sm-offset-1">

                    <h4 class="quotetext">I am located in:</h4>
                       <i class="ion-ios-home quote-icon" id="location"></i>
                       <p class="quotetext quotetextcolor">Toronto, Ontario, Canada</p>

                      <h4 class="quotetext">Telephone:</h4>
                      <i class="ion-ios-telephone quote-icon" id="phone-symbol"></i>
                      <p class="quotetext quotetextcolor"><span id="ph-hidden"></span></p>

                      <h4 class="quotetext">Prefer to send an email?</h4>
                      <i class="ion-ios-email quote-icon" id="email-symbol"></i>
                      <p class="quotetext"><a href="#" id="em-hidden"></a></p>
                  </div>

                  <div class="col-sm-5 button-form">
                    <form name="contactform" method="post" action="">
                          <div class="row">
                              <div class="col-xs-6 quote-form">
                                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                              </div>

                              <div class="col-xs-6 quote-form">
                                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                              </div>

                              <div class="col-xs-12 quote-form">
                                  <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                              </div>
                          </div>
                          <div class="row quote-form1">
                              <textarea class="form-control" rows="5" name="comments" id="message" placeholder="Your Message"></textarea>
                          </div>

                          <!--
                          <div class="row quote-form1">
                            <div class="g-recaptcha" data-sitekey="6LcY3z4UAAAAAGCZrChnZdPz0To1IloY-26_SEhl"></div>
                          </div>

                        -->

                          <input type="submit" id="form-submit" name="submit" class="btn btn-primary button-sub" value="Submit"/>

                      </form>

                  </div>

               </div>
          </div>
      </div>
      <!-- ************ FOOTER ************ -->
      <footer class="clearfix">
        <div class="footer-text">
                <p>Read My Blog <a href="http://blog.darrendev.co" target="_blank">Here</a></p>
            </div>

          <div class="footer-icon ">
               <a href="https://www.facebook.com/darren.devouge" target="_blank"><i class="ion-social-facebook"></i></a>
               <a href="https://twitter.com/darrendev"<i class="ion-social-twitter" ></i>
               <a href="https://www.linkedin.com/in/darrdv/" target="_blank"><i class="ion-social-linkedin"></i></a>
              <a href="https://github.com/darrdv" target="_blank"><i class="ion-social-github"></i></a>
          </div>
      </footer>

      <div class="portfolio-modal modal fade" id="test" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="container project-cont">
                <div class="col-sm-6">
                  <img class="img-responsive" src="public/uploads/maps-api.jpg">
                </div>
                <div class="col-sm-6">
                  <h1>Title</h1>
                  <ul class="proj-skills">
                    <li>Skill 1</li>
                    <li>Skill 2</li>
                    <li>Skill 3</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  <div class="p-spacer"></div><!-- inserted my me -->
                  <a class="proj-button" href="" target="_blank">Website</a>
                  <a class="proj-button" href="" target="_blank">Github</a>
                </div> <!-- col-sm-6 -->
              </div><!-- container project-cont -->
              &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button></p>
            </div> <!-- row -->
          </div><!-- container -->
        </div><!-- modal-content -->
      </div><!-- portfolio-modal modal fade -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- For nav scrolling -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/scroll.js"></script>

<!-- For animation -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="js/animate.js"></script>

    <!-- For personal info obfuscation -->
    <script src="js/mask.js"></script>

</body>

</html>
