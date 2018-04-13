<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | {{ $menu }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('static')
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
  <div class="wrapper">

      <header class="main-header">
        @include('admin.base.header')
      </header>

      <aside class="main-sidebar">
        @include('admin.base.aside')
      </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
            {{ $menu }}
          <small>Clouds Base Project</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">{{ $menu }}</li>
        </ol>
      </section>

      <section class="content">
        <!-- content will appear here -->
        @yield('content')

      </section>

    </div>

    @include('admin.base.footer')
    @include('admin.base.aside_right')

    <div class="control-sidebar-bg"></div>

  </div>

</body>

</html>