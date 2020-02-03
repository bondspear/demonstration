<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Demonstration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('Flattern/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('Flattern/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('Flattern/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
  <link href="{{ asset('Flattern/css/jcarousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('Flattern/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('Flattern/css/style.css') }}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{ asset('Flattern/skins/default.css') }}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('Flattern/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('Flattern/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('Flattern/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('Flattern/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('Flattern/ico/favicon.png') }}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>           
@if(!Auth::check() )
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
@endif
@if(Auth::check() && Auth::id() >= 1)
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="#">@yield('reg')</a></li>

@endif                                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
       
        
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
         @csrf
        <div class="form-group row">
                    <label class="control-label" for="inputName">{{ __('Name') }}</label>
                    <div class="controls">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  
                  <div class="control-group row">
                    <label class="control-label" for="inputName">{{ __('Email') }}</label>
                    <div class="controls">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email') }}">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="control-group row">
                   <label class="control-label" for="inputName">{{ __('Password') }}</label>
                    <div class="controls">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="control-group row">
                   <label class="control-label" for="inputName">{{ __('Confirm Password') }}</label>
                    <div class="controls">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                      @error('confirm password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="control-group row">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Register</button>    
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
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="control-group row">              
                    <label class="control-label" for="emailSign">{{ __('E-Mail Address') }}</label>
                    <div class="controls">
                      <input id="emailSign" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="enter your email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="control-group row">
                    <label class="control-label" for="Password">{{ __('Password') }}</label>
                    <div class="controls">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="enter your password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                   @enderror
                    </div>
                  </div>            
                  <div class="control-group row">
                    <div class="controls">
                      <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
              
              
              
                <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                @csrf
                  <input type="hidden" name="token" value="{{ $token ?? '' }}">
                  <div class="control-group row">
                    <label class="control-label" for="inputResetEmail">{{ __('E-Mail Address') }}</label>
                    <div class="controls">
                    <input id="emailReset" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="control-group row">
                   <label class="control-label" for="inputResetPassword">{{ __('Password') }}</label>
                    <div class="controls">
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  </div>
                  <div class="control-group row">
                   <label class="control-label" for="inputResetPassword">{{ __('Confirm Password') }}</label>
                    <div class="controls">
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
                  </div>
                  </div>  
                  <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                  </button>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
            
            
            
            
            
            
            
            
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="/"><img src="{{ asset('Flattern/img/logo.png') }}" alt="" class="logo" /></a>
              <h1>Flat and trendy bootstrap template</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                  <li class="dropdown">
                      <a href="#">Home<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{  route('home')  }}">Home</a></li>
                      </ul>
                    </li>       
                    <li class="dropdown">
                      <a href="#">Features <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="typography">Typography</a></li>
                        <li><a href="table">Table</a></li>
                        <li><a href="components">Components</a></li>
                        <li><a href="animations">56 Animations</a></li>
                        <li><a href="icons">Icons</a></li>
                        <li><a href="icon-variations">Icon variations</a></li>
                        <li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index">Nivo slider</a></li>
                            <li><a href="index-alt2">Slit slider</a></li>
                            <li><a href="index-alt3">Parallax slider</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about">About us</a></li>
                        <li><a href="pricingbox">Pricing boxes</a></li>
                        <li><a href="testimonials">Testimonials</a></li>
                        <li><a href="404">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2col">Portfolio 2 columns</a></li>
                        <li><a href="portfolio-3cols">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail">Portfolio detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('post.index') }}">Blog left sidebar</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact">Contact </a>
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