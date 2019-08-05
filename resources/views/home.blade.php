@extends('user/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
  

@section('title', 'Welcome')
@section('subtitle','' )

@section('main-content')
<article>
    <div class="container">
      <div class="row">
     
           <h3>Welcome to tech-Blog </h3> <br>{{ Auth::user()->name }}


      </div>
    </div>
  </article>

  <hr>
@endsection

@section('footer')

@endsection























































