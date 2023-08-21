<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ URL::to('/') }}/home" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
               
                <li class="nav-item {{ Request::is('admin/user/usershow') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('admin.user.usershow') }}" title="user">
                        <i class="nav-icon fas fa-th"></i>
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate sidebar--badge-container">
                           user
                           
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/template/templateshow') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('admin.template.templateshow') }}" title="user">
                        <i class="nav-icon fas fa-th"></i>
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate sidebar--badge-container">
                           template  
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/task/taskshow') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('admin.task.taskshow') }}" title="user">
                        <i class="nav-icon fas fa-th"></i>
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate sidebar--badge-container">
                           task  
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/project/projectshow') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('admin.project.projectshow') }}" title="user">
                        <i class="nav-icon fas fa-th"></i>
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate sidebar--badge-container">
                           project  
                        </span>
                    </a>
                </li>
                
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>