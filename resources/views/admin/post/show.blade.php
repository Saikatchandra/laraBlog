@extends('admin.layouts.app')

@section('main-content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Post</h3>
          @can('posts.create', Auth::user())
          <a class="col-lg-offset-5 btn btn-info" href="{{route('post.create')}}">Add new </a>
          @endcan
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            @include('admin.layouts.msg')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl NO</th>
                  <th>Post title</th>
                  <th>Post suB title</th>
                  <th>Post slug</th>
                  @can('posts.update', Auth::user())
                  <th>Edit</th>
                 @endcan 
                 @can('posts.delete', Auth::user())
                  <th>Delete</th>
                 @endcan 
                </tr>
                </thead>
                <tbody>
               
                @foreach($posts as $key=>$post)
               
               <tr>
                  <td>{{ $key + 1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  
                  @can('posts.update', Auth::user())
                  <td> <a href="{{route('post.edit',$post->id)}}"><span class="glyphicon glyphicon-edit"></span>  </a></td>
                  @endcan
                 
                  @can('posts.delete', Auth::user()) 
                  <td>
                <form id="delete-form-{{ $post->id }}" method="POST" action="{{ route('post.destroy',$post->id)}}" style="display: none;">
         {{ csrf_field() }}
         {{ method_field('DELETE') }}
        </form>
        <a 
        onclick="if(confirm('Are you sure to delete')){
            event.preventDefault();
            document.getElementById('delete-form-{{ $post->id }}').submit();       
        }else {
            event.preventDefault();
        }"><span class="glyphicon glyphicon-trash"></span></a>

  </td>
  @endcan
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Sl NO</th>
                <th>Post title</th>
                  <th>Post suB title</th>
                  <th>Post slug</th>
                 
                  @can('posts.update', Auth::user())
                  <th>Edit</th>
                 @endcan 
                 @can('posts.delete', Auth::user())
                  <th>Delete</th>
                 @endcan 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection