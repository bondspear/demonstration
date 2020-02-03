            @foreach($posts as $post)
     
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-slider">
                    <div class="post-heading">
                      <h3><a href="{{ route('post.show',$post) }}">{{  $post->header }}</a></h3>
                    </div>
                    @if(!empty($post->video) )
                  <div class="video-container">
                    <iframe src="{{ $post->video }}"></iframe>
                </div>
                    @endif
                    <!-- start flexslider -->
                    <div class="flexslider">
                      <ul class="slides">
                        @if(!empty($post->image) )
                        <li>
                          <img src="{{ $post->image }}" alt="" />
                        </li>
                          @endif
                          @if(!empty($post->image2) )
                          <li>
                          <img src="{{ $post->image2  }}" alt="" />
                          </li>
                           @endif
                          @if(!empty($post->image3) )
                          <li>
                          <img src="{{ $post->image3  }}" alt="" />
                          </li>  
                           @endif                    
                      </ul>
                    </div>
                    <!-- end flexslider -->
                  </div>
                  @if(!empty($post->text) )
                  <p>
                     {{  Str::words($post->text,50,'...') }} 
                  </p>
                  @endif
                  @if(!empty($post->cite) )
                  <blockquote>
                    <i class="icon-quote-left"></i>{{ $post->cite }}
                  </blockquote>
      
                 
                  @endif
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i>{{ $post->created_at->format('j F Y ')}}</li>
                      <li><i class="icon-user"></i><a href="{{ route('home') }}">{{$users}}</a></li>

                      <li><i class="icon-folder-open"></i><a href="{{route('category.show',$post->category->id) }}">{{$post->category->category }}</a></li>

                      <li><i class="icon-comments"></i><a href="{{ route('post.show',$post) }}">{{ $post->comments->count() }} Comments</a></li>
                    </ul>
                    <a href="{{ route('post.show',$post) }}" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </article>
           
            @endforeach
            
         