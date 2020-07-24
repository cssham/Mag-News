<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mag News - A Sham's Production</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('assets/frontend/css')}}/bootstrap.css" rel="stylesheet" />
  <link href="{{asset('assets/frontend/css')}}/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{{asset('assets/frontend/css')}}/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="{{asset('assets/frontend/css')}}/jcarousel.css" rel="stylesheet" />
  <link href="{{asset('assets/frontend/css')}}/flexslider.css" rel="stylesheet" />
  <link href="{{asset('assets/frontend/css')}}/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
 <div id="app">
    <div id="wrapper">
        <!-- toggle top area -->

        <!-- end toggle top area -->
        <!-- start header -->
        <header>
          <div class="container ">
            <!-- hidden top area toggle link -->

            <!-- end toggle link -->
            <div class="row nomargin">
              <div class="span12">
                <div class="headnav">
                  <ul>
                    <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                    <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                  </ul>
                </div>
                <!-- Signup Modal -->
                <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputSignupPassword">Password</label>
                        <div class="controls">
                          <input type="password" id="inputSignupPassword" placeholder="Password">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                        <div class="controls">
                          <input type="password" id="inputSignupPassword2" placeholder="Password">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Sign up</button>
                        </div>
                        <p class="aligncenter margintop20">
                          Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end signup modal -->
                <!-- Sign in Modal -->
                <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal">
                      <div class="control-group">
                        <label class="control-label" for="inputText">Username</label>
                        <div class="controls">
                          <input type="text" id="inputText" placeholder="Username">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputSigninPassword">Password</label>
                        <div class="controls">
                          <input type="password" id="inputSigninPassword" placeholder="Password">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Sign in</button>
                        </div>
                        <p class="aligncenter margintop20">
                          Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end signin modal -->
                <!-- Reset Modal -->
                <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal">
                      <div class="control-group">
                        <label class="control-label" for="inputResetEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputResetEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Reset password</button>
                        </div>
                        <p class="aligncenter margintop20">
                          We will send instructions on how to reset your password to your inbox
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end reset modal -->
              </div>
            </div>
            <div class="row">
              <div class="span4">
                <div class="logo">
                  <a href="index.html"><img src="{{asset('assets/frontend/img')}}/logo-01.png" alt="" class="logo" /></a>
                  <h1>Fast and Latest News Provider</h1>
                </div>
              </div>
              <div class="span8">
                <div class="navbar navbar-static-top">
                  <div class="navigation">
                    <nav>
                      <ul class="nav topnav">
                        <li >
                          <a href="index.html">Home</a>
                        </li>
                        <li class="dropdown">
                          <a href="#">Politics</a>
                        </li>
                        <li class="dropdown">
                          <router-link to="/news">Business </router-link>
                        </li>
                        <li class="dropdown">
                            <router-link to="/news">Sports </router-link>
                          </li>
                          <li class="dropdown">
                            <router-link to="/news">Entertainment </router-link>
                          </li>
                          <li class="dropdown">
                            <router-link to="/news">Technology </router-link>
                          </li>
                        <li>
                          <a href="contact.html">Contact </a>
                        </li>
                        <li class="dropdown">
                            <a href="#">About Us </a>
                          </li>
                      </ul>
                    </nav>
                  </div>
                  <!-- end navigation -->
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- end header -->
        {{-- main content start --}}
        <frontend-master></frontend-master>
        {{-- main content end --}}
        <section id="bottom">
          <div class="container">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <div id="twitter-wrapper">
                    <div id="twitter">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="span4">
                <div class="widget">
                  <h5 class="widgetheading">Browse pages</h5>
                  <ul class="link-list">
                    <li><a href="#">About our company</a></li>
                    <li><a href="#">Our services</a></li>
                    <li><a href="#">Meet our team</a></li>
                    <li><a href="#">Explore our portfolio</a></li>
                    <li><a href="#">Get in touch with us</a></li>
                  </ul>
                </div>
              </div>
              <div class="span4">
                <div class="widget">
                  <h5 class="widgetheading">Important stuff</h5>
                  <ul class="link-list">
                    <li><a href="#">Press release</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Career center</a></li>
                    <li><a href="#">Flattern forum</a></li>
                  </ul>
                </div>
              </div>
              
              <div class="span4">
                <div class="widget">
                  <h5 class="widgetheading">Get in touch with me</h5>
                  <address>
                                    <strong>Chanchal Sarker</strong><br>
                                     MBSTU<br>
                                     Tangail
                                 </address>
                  <p>
                    <i class="icon-phone"></i> 01521-----35 <br>
                    <i class="icon-envelope-alt"></i> chanchalsham@gmail.com
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="sub-footer">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <div class="copyright">
                    <p>
                      <span>&copy; Flattern - All right reserved.</span>
                    </p>
                    <div class="credits">
                      <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                      -->
                      Developed by <a href="#">Chanchal Sarker</a>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <ul class="social-network">
                    <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
 </div>

  <!-- javascript
    ================================================== -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('assets/frontend/js')}}/jquery.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.easing.1.3.js"></script>
  <script src="{{asset('assets/frontend/js')}}/bootstrap.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.fancybox.pack.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.fancybox-media.js"></script>
  <script src="{{asset('assets/frontend/js')}}/google-code-prettify/prettify.js"></script>
  <script src="{{asset('assets/frontend/js')}}/portfolio/jquery.quicksand.js"></script>
  <script src="{{asset('assets/frontend/js')}}/portfolio/setting.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.flexslider.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.nivo.slider.js"></script>
  <script src="{{asset('assets/frontend/js')}}/modernizr.custom.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.ba-cond.min.js"></script>
  <script src="{{asset('assets/frontend/js')}}/jquery.slitslider.js"></script>
  <script src="{{asset('assets/frontend/js')}}/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('assets/frontend/js')}}/custom.js"></script>

</body>
</html>
