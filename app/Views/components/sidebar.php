<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <?php
    if (session()->get('role') == 'admin') {
      ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'dashboard') ? "" : "collapsed" ?>" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
    }
    ?>

    <?php
    if (session()->get('role') == 'admin') {
      ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'adminpanel') ? "" : "collapsed" ?>" href="adminpanel">
          <i class="bi bi-file-person"></i>
          <span>Admin Panel</span>
        </a>
      </li>
      <?php
    }
    ?>

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'bloglist') ? "" : "collapsed" ?>" href="bloglist">
        <i class="bi bi-card-list"></i>
        <span>Daftar Blog</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'blogadd') ? "" : "collapsed" ?>" href="blogadd">
        <i class="bi bi-file-plus"></i>
        <span>Tambah Blog</span>
      </a>
    </li>

  </ul>

</aside><!-- End Sidebar-->