   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">

          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Post</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i>View Post</a></li>
              <li><a href="{{ route('post.create') }}"><i class="fa fa-circle-o"></i> Create Post</a></li>
            </ul>
          </li>
            <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i>Tags</a></li>
            <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>Category</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Mailbox</a></li>
        </li>
    </section>
    <!-- /.sidebar -->