  @includeIf('header')
      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Blog left sidebar</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="blog-left-sidebar">Blog</a><i class="icon-angle-right"></i></li>
              <li class="active">Blog with left sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span4">
          <!-- blog.left_sidebar -->
        <!-- это модуль боковая панель -->
 <aside class="left-sidebar">
              <div class="widget">
              
              
                <form class="form-search" action="{{ route('searching') }}" method="GET">
                  <input placeholder="Type something" type="search" name="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </form>
                
<!-- это категории постов -->                
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                @foreach($category_all as $item)
                  <li><i class="icon-angle-right"></i><a href="{{route('category.show',$item) }}">{{ $item->category }}</a><span> ( {{$item->posts->count() }} )</span></li>
                  @endforeach  
                </ul>
              </div>
<!-- это последние 3 поста -->              
              <div class="widget">
                <h5 class="widgetheading">Latest posts</h5>
                <ul class="recent">
                  
                @foreach($posts_limit  as $item)
                  <li>
                    <img src="{{ $item->image }}" class="pull-left" alt="" />
                    <h6><a href="{{ route('post.show',$item) }}">{{ $item->header }}</a></h6>
                    <p>
                      {{  Str::words($item->text,15,'...') }}
                      
                    </p>
                  </li>
                @endforeach
                </ul>
              </div>
<!-- это хэштэги -->              
              <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
              @foreach($popular_hashtags as $popular_tag)       
                  <li>
                  
                 
                      <form  action="{{ route('post.update',$popular_tag->id) }}" method="post">
                      {{ method_field('PUT') }}
                      @csrf
                      <input type="hidden" name="tag" value="{{$popular_tag->id}}">
                      <div class="btn-group btn-group-sm" role="group" aria-label="...">
                      
                      <button class="btn btn-light" type="submit">{{$popular_tag->hash_name}}</button>
                      </div>
 
                      </form>       
                                   
                  </li>                            
  
                      @endforeach                   
                       
                </ul>
              </div>
            </aside>
          <!-- blog.left_sidebar end -->
          </div>
          <div class="span8"> 
    @yield('blog')
           </div>
      </div>
    </section>
  @includeIf('footer')
