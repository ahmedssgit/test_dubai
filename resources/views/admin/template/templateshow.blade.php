<!DOCTYPE html>
<html>

@extends('admin.layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@extends('admin.layout.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}/home">Home</a></li>
                            <li class="breadcrumb-item active">Show template</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->
        <div class="row">
          <div class="col-sm-9 text-center">
            <a class="btn  action-btn btn--danger btn-outline-primary" href="{{route('admin.template.create')}}"
              title="add"> create template
              </a>
              <hr>
          </div>
         
      
      </div>

  <!-- /.row -->
  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">template Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Template ID</th>
                      <th>Template Title</th>
                      <th>Task ID</th>
                      <th>Task Title</th>
                      <th>Task Description</th>
                      <th>Due Date</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($templates as $template)
                    @foreach ($template->tasks as $task)
                    <tr>
                      <td>{{ $template->id }}</td>
                      <td>{{ $template->title }}</td>
                      <td>{{ $task->id }}</td>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->description }}</td>
                      <td>{{ $task->due_date }}</td>
                  </tr>
                  @endforeach
                  @endforeach
	                      
                               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->





       

</body>

</html>