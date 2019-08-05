@extends('admin.layouts.app')

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
              <h3 class="box-title">Create Permission</h3>
            </div>
            @include('admin.layouts.msg')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('permission.store')}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                  <label for="name">Permission name</label>
                  <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                <label for="for">Permission for<label>
                <select name="for" id="for" class="form-control">
                <option selected disable>Select Permission for</option>
                <option value="user">user</option>
                <option value="post">Post</option>
                <option value="other">Other</option>
                 </select>
                 </div>
                

                <div class="form-group">
                <button type="submit"  class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{route('permission.index')}}">Back </a>
              </div>
                
              </div>    
              
              </div>
              <!-- /.box-body -->
                <!-- /.box -->


              
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