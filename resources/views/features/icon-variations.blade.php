@extends('layout')
@section('content')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Icon variations</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="icon-variations">Features</a><i class="icon-angle-right"></i></li>
              <li class="active">Icon variations</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <h4><strong>Square</strong> icons</h4>
                <p>
                  See example below
                </p>
                <p>
                  <i class="icon-square icon-adjust"></i> icon-adjust
                </p>
                <pre class="prettyprint linenums">
							 &lt;i class="icon-square icon-adjust"&gt;&lt;/i&gt; icon-adjust
						</pre>
              </div>
              <div class="span3">
                <h4><strong>Rounded</strong> icons</h4>
                <p>
                  See example below
                </p>
                <p>
                  <i class="icon-rounded icon-briefcase"></i> icon-briefcase
                </p>
                <pre class="prettyprint linenums">
							 &lt;i class="icon-rounded icon-briefcase"&gt;&lt;/i&gt; icon-briefcase
						</pre>
              </div>
              <div class="span3">
                <h4><strong>Circled</strong> icons</h4>
                <p>
                  See example below
                </p>
                <p>
                  <i class="icon-circled icon-beaker"></i> icon-beaker
                </p>
                <pre class="prettyprint linenums">
							 &lt;i class="icon-circled icon-beaker"&gt;&lt;/i&gt; icon-beaker
						</pre>
              </div>
              <div class="span3">
                <h4><strong>Icon</strong> with active color</h4>
                <p>
                  See example below
                </p>
                <p>
                  <i class="icon-square active icon-adjust"></i> icon-adjust
                </p>
                <pre class="prettyprint linenums">
							 &lt;i class="icon-square icon-adjust"&gt;&lt;/i&gt; icon-adjust
						</pre>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <h4><strong>Icon</strong> sizes for (circled, square, rounded)</h4>
            <div class="row">
              <div class="span4">
                <p>
                  <i class="icon-circled icon-beaker"></i> Default size
                </p>
                <p>
                  <i class="icon-circled icon-beaker icon-32"></i> Icon 32px
                </p>
                <p>
                  <i class="icon-circled icon-beaker icon-48"></i> Icon 48px
                </p>
                <p>
                  <i class="icon-circled icon-beaker icon-64"></i> Icon 64px
                </p>
                <p>
                  <i class="icon-circled icon-beaker icon-128"></i> Icon 128px
                </p>
              </div>
              <div class="span4">
                <p>
                  <i class="icon-square icon-beaker"></i> Default size
                </p>
                <p>
                  <i class="icon-square icon-beaker icon-32"></i> Icon 32px
                </p>
                <p>
                  <i class="icon-square icon-beaker icon-48"></i> Icon 48px
                </p>
                <p>
                  <i class="icon-square icon-beaker icon-64"></i> Icon 64px
                </p>
                <p>
                  <i class="icon-square icon-beaker icon-128"></i> Icon 128px
                </p>
              </div>
              <div class="span4">
                <p>
                  <i class="icon-rounded icon-beaker"></i> Default size
                </p>
                <p>
                  <i class="icon-rounded icon-beaker icon-32"></i> Icon 32px
                </p>
                <p>
                  <i class="icon-rounded icon-beaker icon-48"></i> Icon 48px
                </p>
                <p>
                  <i class="icon-rounded icon-beaker icon-64"></i> Icon 64px
                </p>
                <p>
                  <i class="icon-rounded icon-beaker icon-128"></i> Icon 128px
                </p>
              </div>
              <!-- divider -->
              <div class="span12 margintop20">
                <div class="solidline">
                </div>
              </div>
              <!-- end divider -->
              <div class="span12 demoinline">
                <h4><strong>Icon</strong> sizes for (circled, square, rounded)</h4>
                <p>
                  <i class="icon-beaker"></i> icon-beaker default
                </p>
                <p>
                  <i class="icon-beaker icon-2x"></i> icon-beaker 2x, add class <code>icon-2x</code>
                </p>
                <p>
                  <i class="icon-beaker icon-3x"></i> icon-beaker 3x, add class <code>icon-3x</code>
                </p>
                <p>
                  <i class="icon-beaker icon-4x"></i> icon-beaker 4x, add class <code>icon-4x</code>
                </p>
              </div>
            </div>
          </div>
          <!-- end span12 -->
        </div>
      </div>
    </section>
   
@endsection