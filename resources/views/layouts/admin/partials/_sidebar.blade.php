<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"> {{Auth::user()->name}}</span>
            <span class="text-secondary text-small">Admin</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item {{Request::is('users') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/users">
          <span class="menu-title">Users</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
    </ul>
  </nav>
