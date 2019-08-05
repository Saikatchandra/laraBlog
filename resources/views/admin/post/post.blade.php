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
              <h3 class="box-title">Create Post</h3>
            </div>
            @include('admin.layouts.msg')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
               
              <div class="box-body">
                <div class="col-lg-6"><div class="form-group"><label for="title">Posts Title</label><input type="title" class="form-control" id="title" name="title" ></div><div class="form-group"><label for="subtitle">Posts subtitle</label><input type="subtitle" class="form-control" id="subtitle" name="subtitle"  ></div><div class="form-group"><label for="slug">Posts slug</label><input type="slug" class="form-control" id="slug" name="slug"></div></div>    
               <div class="col-lg-6">
                 <div class="form-group">
                  <div class="pull-right">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image" >
               </div>
               <div class="checkbox pull-left">
                  <label>
                    <input type="checkbox" name ="status" value="1" > Publish
                  </label>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group" style="margin-top:18px;">
                                <label>Select Tags</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                @foreach ($tags as $tag)
                                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                                </select>
                              </div>
                              <div class="form-group" style="margin-top:18px;">
                                <label>Select Category</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                  @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
              
            <textarea  name="body"
style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
            
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
@endsection