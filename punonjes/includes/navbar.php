<header class="main-header">
  <!-- Logo -->
  <a href="home.php" class="logo">

    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Dashboard</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-footer">
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat"> Dil</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
