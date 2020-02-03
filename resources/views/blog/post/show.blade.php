@extends('blog.blog_layout')
@section('blog')

            <article>
              <div class="row">
                <div class="span8">
                                   <div class="post-slider">
                    <div class="post-heading">
                      <h3><a href="#">{{  $post->header }}</a></h3>
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
                  <p>
                  	 {{ $post->text }}
                  </p>
                  <blockquote>
                    <i class="icon-quote-left"></i> {{ $post->cite }}
                  </blockquote>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-user"></i><a href="{{ route('home') }}">{{$users}}</a></li>
                      <li><i class="icon-folder-open"></i><a href="{{route('category.show',$post->category->id) }}">{{$post->category->category }}</a></li>
                      <li><i class="icon-tags"></i>
                      
                      
                      @foreach($post->hashtags as $one_tag)    
                      
                     <!--   <a href="#" onclick="document.getElementById('myform').submit();">{{$one_tag->hash_name}}&nbsp;</a>   -->
                      
                      
                      <a>
                      <form id="myform" action="{{ route('post.update',$one_tag->id) }}" method="post">
                      {{ method_field('PUT') }}
                      @csrf
                      <input type="hidden" name="tag" value="{{$one_tag->id}}">
                      <div class="btn-group btn-group-sm" role="group" aria-label="...">
                      
                      <button class="btn btn-light" type="submit">{{$one_tag->hash_name}}</button>
                      </div>                                             
                      
                      </form>       
                      </a>
                        
                      
                      @endforeach                            
                      
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <!-- author info -->
            <div class="about-author">
              <a href="#" class="thumbnail align-left"><img src="{{ asset('Flattern/img/avatar.png') }}" alt="" /></a>
              <h5><strong><a href="{{ route('home') }}">{{$users}}</a></strong></h5>
              
              
              @if(isset($info))
              <p>
               {{ $info }}
              </p>
              @endif
            </div>
              
            
            <div class="comment-area">
              <h4>{{ $post->comments->count() }}   Comments</h4>
              
             
                          @foreach( $post->comments as $item)
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="{{ asset('Flattern/img/avatar.png') }}" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>{{ $item->created_at->format('j F Y ') }}</span> {{ $users }}</h6>
                    <p>
                      {{ $item->text }}
                    </p>
                  
                
                   <form action="{{ route('answer.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="comment_id" value="{{ $item->id }}">
                    <input type="text" name="answer">
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Reply comment</button>
                    </form>
                  
                  
                 @foreach($item->answers as $ans)
            
                
                    
                    <a href="#" class="thumbnail align-left"><img src="{{ asset('Flattern/img/avatar.png') }}" alt="" /></a>
                
                  
              <h6><span>{{ $ans->created_at->format('j F Y ') }}</span> {{ $users }} ( {{Str::words($item->text,5,'...')}} )</h6>
              <p>
               {{ $ans->answer }}
              </p>
              
              
                    <form action="{{ route('answer.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="comment_id" value="{{ $item->id }}">
                    <input type="text" name="answer">
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Reply comment</button>
                    </form>
                    
            @endforeach
            
                   
                   
                     
                     
                     
                     
                  </div>
                </div>
              </div>
              @endforeach

              @if(Auth::check())
               @includeIf('blog.comment.index') 
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    

@endsection