<!DOCTYPE html>
<html>

@extends('admin.layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@extends('admin.layout.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <!-- /.content-header -->
        

  <!-- /.row -->
  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">task Table</h3>

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
                      <th>task ID</th>
                      
                      <th>Template Title</th>
                      <th>User Email</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($project as $project)
                  <tr>
                      <td>{{ $project->id }}</td>
                    
                      <td>{{ $project->template->title }}</td>
                      <td>{{ $project->user->email }}</td>
                  </tr>
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