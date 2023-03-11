<!DOCTYPE html>
<html>
<head>

@include('admin.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  
  @include('admin.includes.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  
  @include('admin.includes.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <h3>Tag</h3>
  @include('admin.includes.control_dashboard')
  </div>
 

  <footer class="main-footer">
 
  @include('admin.includes.footer')
  </footer>


        <!--content of page -->

@include('admin.includes.scripts')
</body>
</html>
