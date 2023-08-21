


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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-9 text-center">
                    <a class="btn  action-btn btn--danger btn-outline-primary" href="{{route('admin.user.create')}}"
                      title="add"> create user
                      </a>
                      <hr>
                  </div>
                  <div class="col-sm-9 text-center">
                    <a class="btn  action-btn btn--danger btn-outline-primary" href="{{route('admin.template.create')}}"
                      title="add"> create template
                      </a>
                      <hr>
                  </div>
                  <div class="col-sm-9 text-center">
                    <a class="btn  action-btn btn--danger btn-outline-primary" href="{{route('admin.task.create')}}"
                      title="add"> create task
                      </a>
                      <hr>
                  </div>
                  <div class="col-sm-9 text-center">
                    <a class="btn  action-btn btn--danger btn-outline-primary" href="{{route('admin.project.create')}}"
                      title="add"> create project
                      </a>
                      <hr>
                  </div>
                <hr>
                <hr>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @extends('admin.layout.footer')

</body>
</html>
