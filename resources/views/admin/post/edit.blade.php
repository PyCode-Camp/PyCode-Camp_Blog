<!DOCTYPE html>
<html>

<head>

    @include('admin.includes.head')
      <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css')}}">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/all.css')}}">
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

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Text Editors
                    <small>Advanced form element</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Editors</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Title</h3>
                               
                            </div>

                            @if (count($errors) > 0)

                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach

                            @endif
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('post.update', $post) }}">

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <div class="box-body">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="title">Post Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title}}"
                                                placeholder="Title">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle">Post Sub Title</label>
                                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                placeholder="Sub Title" value="{{ $post->subtitle }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Post Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                placeholder="Slug" value="{{ $post->slug }}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="image">File input</label>
                                            <input type="file" name="image" id="image" value="{{ $post->image}}">
                                            <br><br>
                                            <div class="Publish">
                                                <label>
                                                    <input type="checkbox" name="status" @if ($post->status == 1) checked @endif>  Check me out
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Write Post Body Here
                                            <small>Simple and fast</small>
                                        </h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                                <i class="fa fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->

                                        {{-- multiple select --}}
                                        <div class="form-group">
                                            <label>Multiple</label>
                                            <select class="form-control " id="select" multiple="multiple" data-placeholder="Select a State"
                                                    style="width: 100%;">
                                              <option>Alabama</option>
                                              <option>Alaska</option>
                                              <option>California</option>
                                              <option>Delaware</option>
                                              <option>Tennessee</option>
                                              <option>Texas</option>
                                              <option>Washington</option>
                                            </select>
                                          </div>

                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body pad">

                                        <textarea class="textarea" placeholder="Place some text here" name="body"
                                            style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>

                                    </div>
                                </div>
                                <a href="category.php">
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary"> Save</button>
                                        <a class="col-lg-offset-9 btn btn-danger" href="{{ route('post.index')}}">Cancel</a>
                                    </div>
                                </a>
                            </form>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>




    </div>
    <footer class="main-footer">

        @include('admin.includes.footer')
    </footer>

    @include('admin.includes.scripts')

    
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <!-- Select2 -->
        <script src="{{ asset('admin/plugins/select2/select2.full.min.js')}}"></script>
        <!-- iCheck 1.0.1 -->
        <script src="{{ asset('admin/plugins/iCheck/icheck.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#select2').select2();
            });
        </script>
   
</body>

</html>
