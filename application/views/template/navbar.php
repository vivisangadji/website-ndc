<nav class="navbar navbar-expand-lg navbar-dark header sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
    	<div class="logo">
    		<img src="<?= base_url('public/img/ndc.png') ?>" alt="">
    		<label>NIPHAZ DIPLOMA CLUB</label>
    		<label>UNDIPA MAKASSAR</label>
    	</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav menu menu-small">
        <li class="nav-item">
          <a class="menu-link <?= $menu[0] ?>" href="<?= base_url('home') ?>" class="aktif" title="">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="menu-link <?= $menu[1][0] ?>" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">Profil</a>
          <ul class="dropdown-menu menu border-0" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?= $menu[1][1] ?>" href="<?= base_url('profil/visi-misi') ?>">Visi Misi</a></li>
			<li><a class="dropdown-item <?= $menu[1][2] ?>" href="<?= base_url('profil/anggota-kepengurusan') ?>">Anggota</a></li>
			<li><a class="dropdown-item <?= $menu[1][3] ?>" href="<?= base_url('profil/sejarah') ?>">Sejarah</a></li>
			<li><a class="dropdown-item <?= $menu[1][4] ?>" href="<?= base_url('profil/struktur-bph') ?>">Struktur</a></li>
			<li><a class="dropdown-item <?= $menu[1][5] ?>" href="<?= base_url('profil/program-kerja') ?>">Program Kerja</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="menu-link <?= $menu[2][0] ?>" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">Artikel</a>
          <ul class="dropdown-menu menu border-0" aria-labelledby="navbarDropdownMenuLink">
			<li><a class="dropdown-item <?= $menu[2][1] ?>" href="<?= base_url('artikel/1') ?>">Info IT</a></li>
			<li><a class="dropdown-item <?= $menu[2][2] ?>" href="<?= base_url('artikel/2') ?>">Tutorial IT</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="menu-link <?= $menu[3] ?>" href="<?= base_url('agenda') ?>" title="">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="menu-link <?= $menu[4] ?>" href="<?= base_url('galeri') ?>" title="">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="menu-link <?= $menu[5] ?>" href="<?= base_url('kontak') ?>" title="">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="menu-link bg-dark text-white p-2 rounded <?= $menu[6] ?>" href="<?= base_url('form-pendaftaran') ?>" title="">
          Pendaftaran
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>