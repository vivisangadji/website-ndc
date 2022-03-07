<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger text-white">
       <i class="nav-icon fas fa-sign-out-alt"></i> Logout
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url('public/img/user.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin') { echo 'active'; } ?>">
              <i class="nav-icon fas fa- fa-home"></i>
               <p>
                HOME
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/agenda') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/agenda') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-calendar-alt"></i>
               <p>
                Agenda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/carousel') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/carousel') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Carousel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/galeri') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/galeri') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/proker') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/proker') { echo 'active'; } ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Proker
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/sejarah') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/sejarah') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-feather-alt"></i>
              <p>
                Sejarah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/struktur') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/struktur') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Struktur
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/visimisi') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/visimisi') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Visi & Misi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/anggota') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/anggota') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/artikel') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/artikel') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/service') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/service') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Service Footer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/konsentrasi') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/konsentrasi') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Konsentrasi Footer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/divisi') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/divisi') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Divisi Footer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/kontak_medsos') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/kontak_medsos') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Kontak & Medsos Footer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/komentar') ?>" class="nav-link <?php if($this->uri->uri_string() == 'admin/komentar') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Komentar
              </p>
            </a>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  