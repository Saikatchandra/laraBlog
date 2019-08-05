@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('main-content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Text Editors
<small>Advanced form element</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Forms</a></li>
<li class="active">Editors</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Update Post</h3>
</div>
@include('admin.layouts.msg')
<!-- /.box-header -->
<!-- form start -->
<form role="form" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PUT')}}
<div class="box-body">
<div class="col-lg-6"><div class="form-group"><label for="title">Posts title</label><input type="title" class="form-control" id="title" name="title" value="{{$post->title}}"></div><div class="form-group"><label for="subtitle">Posts subtitle</label><input type="subtitle" class="form-control" id="subtitle" name="subtitle" value="{{$post->subtitle}}" ></div><div class="form-group"><label for="slug">Posts slug</label><input type="slug" class="form-control" id="slug" name="slug" value="{{$post->slug}}"></div></div>    
<div class="col-lg-6">
<br>
<div class="form-group">
<div class="pull-right">
<label for="image">File input</label>
<input type="file" name="image" id="image" value="{{$post->image}}">
</div>
<div class="checkbox pull-left">
<label>
<input type="checkbox" name ="status" value="1" @if($post->status == 1) 
{{ 'checked' }}
@endif > Publish
</label>
</div>
</div>
<br>
<br>

<div class="form-group" data-select2-id="13" style="margine-top:18px;">
<label>Select Tag</label>
<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tags[]">
@foreach($tags as $tag)
<option value="{{ $tag->id }}"
  @foreach($post->tags as $postTag)
     @if($postTag->id == $tag->id)
       selected
     @endif
  @endforeach   
>{{ $tag->name }}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label>Select Category</label>
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true" name="categories[]">

@foreach($categories as $category)
<option value="{{ $category->id }}"
  @foreach($post->categories as $postCat)
      @if($postCat->id == $category->id)
        selected
      @endif
    @endforeach 

>{{ $category->name }}</option>
@endforeach

</select>
</div>


</div>
</div>
<!-- /.box-body -->
<!-- /.box -->

<div class="box">
<div class="box-header">
<h3 class="box-title">Write Post here
<small>Simple and fast</small>
</h3>

</div>

<!-- /.box-header -->
<div class="box-body pad">

<textarea name="body" 
style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"> {{ $post->body }} </textarea>

</div>
</div>

<div class="box-footer">
<button type="submit"   class="btn btn-primary">Submit</button>
<a class="btn btn-warning" href="{{route('post.index')}}">Back </a>
</div>
</form>
</div>

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
@endsection

@section('footerSection')
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
$(document).ready(function() {
  $('.select2').select2();
});
</script>

<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
  <script> 
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  </script>
  @endSection