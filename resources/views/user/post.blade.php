@extends('user/app')

@section('bg-img' , Storage::disk('local')->url($post->image) )
  @section('head')
      <link href="{{asset('user/css/prism.css')}}" rel="stylesheet">
  @endsection

@section('title', $post->title )
@section('subtitle', $post->subtitle)

@section('main-content')
<article>
    <div class="container">
      <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
       <small >Created at {{ $post->created_at->diffForHumans() }}</small>
        
            @foreach ($post->categories as $category)
           <small class="pull-right col-lg-6" style="margin-right: 20px">
            <a href="{{ route('category',$category->slug) }}">   {{ $category->name }} </a>
           </small> 
             @endforeach
                 {!! htmlspecialchars_decode($post->body) !!}
         
                 {{--   Tag Coluds        --}}
                 <h3> Tag Clouds </h3>

                 @foreach ($post->tags as $tag)
          <a href="{{ route('tag',$tag->slug) }}">  <small class="pull-right col-lg-6" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
              {{ $tag->name }}
           </small> </a>
             @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection

@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection