@extends('blog.blog_layout')
@section('blog')

  @includeIf('blog.post.post') 
  
     <div id="pagination">
            @if($posts->count() > 10)
              <span class="all">{{ $posts->count() }} posts  </span>
             @endif
             {{ $posts->links() }}
            </div>
   
@endsection
   