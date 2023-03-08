<!DOCTYPE html>
<html>
<head>
<?php include 'includes\head.php';?>
@include('admin.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  <?php include 'includes\header.php';?>
  @include('admin.includes.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <?php include 'includes\sidebar.php';?>
  @include('admin.includes.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php include 'includes\control_dashbord.php';?>
  @include('admin.includes.control_dashboard')
  </div>
 

  <footer class="main-footer">
  <?php include 'includes\footer.php';?>
  
  </footer>


        <!--content of page -->
<?php include 'includes\scripts.php';?>
</body>
</html>
