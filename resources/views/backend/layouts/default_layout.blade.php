<!DOCTYPE html>
<html>

<head>
    <!-- Head Style -->
    @include('backend.includes.head_style')
    <title>@section('title') | Vgroupcars  @show</title>
    <!-- /.head Style -->
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('backend.includes.navbar')
        <!-- /.navbar -->

        <!-- Sidebar Container -->
        @include('backend.includes.sidebar')
        <!-- /.sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('backend.includes.footer_content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('backend.includes.footer_script')
</body>

</html>
