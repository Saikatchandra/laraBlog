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
              <h3 class="box-title">Users</h3>
            </div>
            @include('admin.layouts.msg')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('user.store')}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                  <label for="name">User name</label>
                  <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label for="email">User Email</label>
                  <input type="slug" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <label for="phone">User phone</label>
                  <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{old('phone')}}">
                </div>

                <div class="form-group">
                  <label for="email"> Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="{{old('password')}}">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter confirm password">
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                    <label><input type="checkbox" name="status" @if (old('status') == 1)
                           checked  @endif
                            value="1" > Status </label>
                  </div>
               
                </div>
                
                <div class="form-group">
                <label>Assign Role</label>
                <div class="row">
                @foreach($roles as $role)
                  <div class='col-lg-4'>
                  <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="{{$role->id}}"> {{ $role->name}} </label>
                  </div>
                  </div>
                 @endforeach 
              </div>
                <div class="form-group">
                <button type="submit"   class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{route('user.index')}}">Back </a>
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