<div class="navbar-header aside-md">
  <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
    <i class="fa fa-bars"></i>
  </a>
  <a href="#" class="navbar-brand" data-toggle="fullscreen">OCR Admin</a>
  <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
    <i class="fa fa-cog"></i>
  </a>
</div>    
<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      Admin<b class="caret"></b>
    </a>
    <ul class="dropdown-menu animated fadeInRight">
      <span class="arrow top"></span>
      <!-- <li>
        <a href="#">Settings</a>
      </li>
      <li>
        <a href="profile.html">Profile</a>
      </li>
      <li>
        <a href="#">
          <span class="badge bg-danger pull-right">3</span>
          Notifications
        </a>
      </li>
      <li>
        <a href="docs.html">Help</a>
      </li> 
      <li class="divider"></li>-->
      <li>
        <a href="{{ route('logout') }}" >Logout</a>
      </li>
    </ul>
  </li>
</ul>