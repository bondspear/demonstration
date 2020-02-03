@extends('layouts.app')
@section('content')
         
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif



<div class="container">
<div class="row">
<div class="span12">
<h3 class="text-center">write a post</h3>


            
</div>
<div class="span6"><h3>Create a category:</h3></div>
<div class="span6">


<form action="{{ route('category.store') }}" method="POST">
@csrf
<input type="hidden"  name="user_id" value="{{ Auth::user()->id }}" >
<label for="category">Create category</label>
<input type="text" name="category"  autofocus>
<button type="submit" class="btn btn-primary"  style="margin-bottom: 10px;">create</button>
</form>


</div>



                   <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}" >

<div class="span6">
                        <h3>Select a category:</h3>
</div>
<div class="span6">
<label for="exampleFormControlSelect1">select</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category_id" >
      @foreach($cat as $cats)
      <option value="{{ $cats->id }}">{{ $cats->category }}</option>
      @endforeach
    </select>
</div>




                        
<div class="span8">
<textarea  name="text" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="margin: 0px 0px 10px; width: 763px; height: 371px;"></textarea>
</div>
<div class="span4">
<div class="row">

<div class="span12">
         <label for="header" class="col-md-6 col-form-label text-md-right">{{ __('header') }}</label>
                            <div class="col-md-6">
                                <input id="header" type="text"  name="header" autofocus>
                            </div>
</div>
<div class="span12">
<label for="image" class="col-md-6 col-form-label text-md-right">{{ __('image') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="text"  name="image" autofocus>
                            </div>
</div>
<div class="span12">
                  <label for="image2" class="col-md-6 col-form-label text-md-right">{{ __('image2') }}</label>
                            <div class="col-md-6">
                                <input id="image2" type="text"  name="image2" autofocus>
                            </div>
</div>
<div class="span12">
                           <label for="image3" class="col-md-6 col-form-label text-md-right">{{ __('image3') }}</label>
                            <div class="col-md-6">
                                <input id="image3" type="text"  name="image3" autofocus>
                            </div>
</div>
<div class="span12">
                            <label for="video" class="col-md-6 col-form-label text-md-right">{{ __('video') }}</label>
                            <div class="col-md-6">
                                <input id="video" type="text"  name="video" autofocus>
                            </div>
</div>
<div class="span12">
               <label for="cite" >{{ __('cite') }}</label>
                            <div >
                                <input id="cite" type="text"  name="cite" autofocus>
                            </div>
</div>




<div class="span12">
                                 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send a post') }}
                                </button>
                                    
</div>
</div>
</div>



                    </form>
                    



<div class="span12">

   
              <a href="#" class="thumbnail align-left"><img src="{{ asset('Flattern/img/avatar.png') }}" alt="" /></a>
              <h5><strong><a href="#">{{ $users}}</a></strong></h5>
              
              <form action="{{ route('user_update') }}" method="post" style="
    margin-right: 17px;
    padding-left: 0px;
    padding-right: 849px;">
              @csrf              
              <input type="text" name="info" placeholder="about me">
              <input type="submit" class="btn btn-primary">
              </form>
              @if(isset($info))
              <p>
               {{ $info }}
              </p>
              @endif

<h3 class="text-center">my posts</h3>
</div>
@foreach($category as $item)
<div class="span3">
            <h4>{{ $item->category }}</h4>
            <ol class="unstyled">
            @foreach($item->posts as $spost)
              <li><a href="{{ route('post.show',$spost) }}">{{ $spost->header }}</a></li>
              @endforeach
            </ol>
          </div>
@endforeach

         
</div>
</div>
@endsection



