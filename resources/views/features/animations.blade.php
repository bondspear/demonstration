@extends('layout')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>56 Animations</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="animations">Features</a><i class="icon-angle-right"></i></li>
              <li class="active">56 Animations</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content" class="demo">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <p>
                  Just put following animation into any elements such as div tag, button, image..etc. Just write the animation name as shown below as the class name and make sure you add <code>e_</code> before the animation name. For example to use <strong>"flash"</strong>                  animation you should write <code>.e_flash</code>
                </p>
                <p>
                  Just hover on each button to see how animation works.
                </p>
              </div>
            </div>
            <!-- solid line divider -->
            <div class="solidline">
            </div>
            <!-- end solid line divider -->
            <div class="row">
              <div class="span4">
                <h4 class="rheading">Attention seekers<span></span></h4>
                <a href="#" class="btn btn-theme btn-large e_flash">flash</a>
                <a href="#" class="btn btn-theme btn-large e_bounce">bounce</a>
                <a href="#" class="btn btn-theme btn-large e_shake">shake</a>
                <a href="#" class="btn btn-theme btn-large e_tada">tada</a>
                <a href="#" class="btn btn-theme btn-large e_swing">swing</a>
                <a href="#" class="btn btn-theme btn-large e_wobble">wobble</a>
                <a href="#" class="btn btn-theme btn-large e_wiggle">wiggle</a>
                <a href="#" class="btn btn-theme btn-large e_pulse">pulse</a>
              </div>
              <div class="span4">
                <div class="rheading">
                  <span></span>
                  <h4>Flippers (currently Webkit, Firefox, & IE10 only)</h4>
                </div>
                <a href="#" class="btn btn-theme btn-large e_flip">flip</a>
                <a href="#" class="btn btn-theme btn-large e_flipInX">flipInX</a>
                <a href="#" class="btn btn-theme btn-large e_flipOutX">flipOutX</a>
                <a href="#" class="btn btn-theme btn-large e_flipInY">flipInY</a>
                <a href="#" class="btn btn-theme btn-large e_flipOutY">flipOutY</a>
              </div>
              <div class="span4">
                <h4 class="rheading">Fading entrances<span></span></h4>
                <a href="#" class="btn btn-theme btn-large e_fadeIn">fadeIn</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInUp">fadeInUp</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInDown">fadeInDown</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInLeft">fadeInLeft</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInRight">fadeInRight</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInUpBig">fadeInUpBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInDownBig">fadeInDownBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInLeftBig">fadeInLeftBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeInRightBig">fadeInRightBig</a>
              </div>
            </div>
            <!-- solid line divider -->
            <div class="solidline">
            </div>
            <!-- end solid line divider -->
            <div class="row">
              <div class="span6">
                <h4 class="rheading">Fading exits<span></span></h4>
                <a href="#" class="btn btn-theme btn-large e_fadeOut">fadeOut</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutUp">fadeOutUp</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutDown">fadeOutDown</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutLeft">fadeOutLeft</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutRight">fadeOutRight</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutUpBig">fadeOutUpBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutDownBig">fadeOutDownBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutLeftBig">fadeOutLeftBig</a>
                <a href="#" class="btn btn-theme btn-large e_fadeOutRightBig">fadeOutRightBig</a>
              </div>
              <div class="span6">
                <div class="rheading">
                  <span></span>
                  <h4>Bouncing entrances</h4>
                </div>
                <a href="#" class="btn btn-theme btn-large e_bounceIn">bounceIn</a>
                <a href="#" class="btn btn-theme btn-large e_bounceInDown">bounceInDown</a>
                <a href="#" class="btn btn-theme btn-large e_bounceInUp">bounceInUp</a>
                <a href="#" class="btn btn-theme btn-large e_bounceInLeft">bounceInLeft</a>
                <a href="#" class="btn btn-theme btn-large e_bounceInRight">bounceInRight</a>
              </div>
            </div>
            <!-- solid line divider -->
            <div class="solidline">
            </div>
            <!-- end solid line divider -->
            <div class="row">
              <div class="span6">
                <h4 class="rheading">Bouncing exits<span></span></h4>
                <a href="#" class="btn btn-theme btn-large e_bounceOut">bounceOut</a>
                <a href="#" class="btn btn-theme btn-large e_bounceOutDown">bounceOutDown</a>
                <a href="#" class="btn btn-theme btn-large e_bounceOutUp">bounceOutUp</a>
                <a href="#" class="btn btn-theme btn-large e_bounceOutLeft">bounceOutLeft</a>
                <a href="#" class="btn btn-theme btn-large e_bounceOutRight">bounceOutRight</a>
              </div>
              <div class="span6">
                <div class="rheading">
                  <span></span>
                  <h4>Rotating entrances</h4>
                </div>
                <a href="#" class="btn btn-theme btn-large e_rotateIn">rotateIn</a>
                <a href="#" class="btn btn-theme btn-large e_rotateInDownLeft">rotateInDownLeft</a>
                <a href="#" class="btn btn-theme btn-large e_rotateInDownRight">rotateInDownRight</a>
                <a href="#" class="btn btn-theme btn-large e_rotateInUpLeft">rotateInUpLeft</a>
                <a href="#" class="btn btn-theme btn-large e_rotateInUpRight">rotateInUpRight</a>
              </div>
            </div>
            <!-- solid line divider -->
            <div class="solidline">
            </div>
            <!-- end solid line divider -->
            <div class="row">
              <div class="span4">
                <h4 class="rheading">Rotating exits<span></span></h4>
                <a href="#" class="btn btn-theme btn-large e_rotateOut">rotateOut</a>
                <a href="#" class="btn btn-theme btn-large e_rotateOutDownLeft">rotateOutDownLeft</a>
                <a href="#" class="btn btn-theme btn-large e_rotateOutDownRight">rotateOutDownRight</a>
                <a href="#" class="btn btn-theme btn-large e_rotateOutUpLeft">rotateOutUpLeft</a>
                <a href="#" class="btn btn-theme btn-large e_rotateOutUpRight">rotateOutUpRight</a>
              </div>
              <div class="span4">
                <div class="rheading">
                  <span></span>
                  <h4>Lightspeed</h4>
                </div>
                <a href="#" class="btn btn-theme btn-large e_lightSpeedIn">lightSpeedIn</a>
                <a href="#" class="btn btn-theme btn-large e_lightSpeedOut">lightSpeedOut</a>
              </div>
              <div class="span4">
                <div class="rheading">
                  <span></span>
                  <h4>Specials</h4>
                </div>
                <a href="#" class="btn btn-theme btn-large e_hinge">hinge</a>
                <a href="#" class="btn btn-theme btn-large e_rollIn">rollIn</a>
                <a href="#" class="btn btn-theme btn-large e_rollOut">rollOut</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
   