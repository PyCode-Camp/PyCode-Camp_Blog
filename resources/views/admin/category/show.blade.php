@extends('admin.tableData')

@section('main-head')

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.css')}}">
    
@endsection

@section('Main-section')
    
      <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Category Table</h3>
          <a class="col-lg-offset-4 btn btn-success" href="{{ route('category.create')}}">Add Category</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Category Name</th>
              <th>Slug</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>

                @foreach ( $categories as  $category)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td> {{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>  <a href="{{ route('category.edit', $category->id)}}"> <span class="glyphicon glyphicon-edit"></span></a></td>
                    <td>

                      <form id="category-delete-{{ $category->id }}" action=" {{ route('category.destroy', $category->id)}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                      </form>

                      <a href="" 
                        onclick="if(confirm('Are you sure you want to delete this ?'))
                        {
                          event.preventDefault(); 
                          document.getElementById('category-delete-{{ $category->id }}').submit();
                        }
                        else{
                          event.preventDefault();
                        }">

                        <span class="glyphicon glyphicon-trash"></span>
                    </td>
                  </tr>
                @endforeach
            
           
           
            
         
            </tbody>
            <tfoot>
            <tr>
                <th>S.No</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </section>

 
@endsection

@section('main-script')

<!-- jQuery 3 -->
<script src="{{ asset('admin/plugins/jquery2/dist/jquery.min.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
