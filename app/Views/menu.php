<span class="app-brand-text demo menu-text fw-bolder ms-2 text-center text-capitalize" style="font-size: 15px;">ABSENSI EKSKUL</span>
</a>

<a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
  <i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>

<div class="menu-inner-shadow"></div>

<ul class="menu-inner py-1">
  <?php  if(session()->get('id')>0) { ?>
     <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Dashboard</span>
    </li>
    <li class="menu-item">
      <a href="<?= base_url('/home/dashboard')?>" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
  <?php }else{} ?>
  <?php  if(session()->get('level')== 1) { ?>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user-voice"></i>
        <div data-i18n="Account Settings">User</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= base_url('/home/guru')?>" class="menu-link">
            <div data-i18n="Connections">Guru</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= base_url('/home/siswa')?>" class="menu-link">
            <div data-i18n="Notifications">Siswa</div>
          </a>
        </li>
      </ul>
    </li>  
  <?php }else{} ?>
  <?php  if(session()->get('level')== 1) { ?>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Ekstrakurikuler</span>
    </li>
    <li class="menu-item">
      <a href="<?= base_url('/home/estrakurikuler')?>" class="menu-link">
        <i class="menu-icon tf-icons bx bx-shekel"></i>
        <div data-i18n="Analytics">Ekstrakurikuler</div>
      </a>      
    </li>
  <?php }else{} ?>
  <?php  if( session()->get('level')== 4) { ?>
     <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Absensi</span>
    </li>
    <li class="menu-item">
      <a href="<?= base_url('/home/absensi')?>" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-institution"></i>
        <div data-i18n="Analytics">Absensi</div>
      </a>      
    </li>
  <?php }else{} ?>
  <?php  if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 ) { ?>
     <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Absensi</span>
    </li>
    <li class="menu-item">
      <a href="<?= base_url('/home/absensi_absensi')?>" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-institution"></i>
        <div data-i18n="Analytics">Absensi</div>
      </a>      
    </li>
  <?php }else{} ?>
  <?php  if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 4) { ?>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Laporan Absensi</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-book-content"></i>
        <div data-i18n="Account Settings">Laporan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= base_url('/home/laporan_absensi')?>" class="menu-link">
            <div data-i18n="Connections">Laporan Absensi</div>
          </a>
        </li>
      </ul>
    </li>
  <?php }else{} ?>
  </ul>
</aside>


<div class="layout-page">

  <nav
  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar"
  >
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <div class="navbar-nav align-items-center">

    </div>

    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <li class="nav-item lh-1 me-3">
    <?php if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3) : ?>
        <span class="fw-semibold d-block text-capitalize"><?= session()->get('nama_guru')?></span>
    <?php else : ?>
        <span class="fw-semibold d-block text-capitalize"><?= session()->get('nama_siswa')?></span>
    <?php endif; ?>
      </li>


      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <?php if($foto->foto != '' && file_exists(PUBLIC_PATH."/profile/".$foto->foto)) { ?>
              <img src="<?= base_url('/profile/'.$foto->foto)?>" alt class="w-px-40 h-auto rounded-circle" />
            <?php }else{ ?>
              <img src="<?= base_url('/profile/default-profile-photo.jpg')?>" alt class="w-px-40 h-auto rounded-circle" />
            <?php } ?>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <?php if($foto->foto != '' && file_exists(PUBLIC_PATH."/profile/".$foto->foto)) { ?>
                      <img src="<?= base_url('/profile/'.$foto->foto)?>" alt class="w-px-40 h-auto rounded-circle" />
                    <?php }else{ ?>
                      <img src="<?= base_url('/profile/default-profile-photo.jpg')?>" alt class="w-px-40 h-auto rounded-circle" />
                    <?php } ?>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block text-capitalize">
                          <?php if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3) : ?>
                          <?= session()->get('nama_guru') ?>
                      <?php else: ?>
                          <?= session()->get('nama_siswa') ?>
                      <?php endif; ?>
                  </span>
                  <small class="text-muted">Level : <?= getRoleName(session()->get('level')) ?></small>
                  <?php
                  function getRoleName($level) {
                    switch ($level) {
                      case 1:
                      return 'Admin';
                      case 2:
                      return 'Kesiswaan';
                      case 3:
                      return 'Guru';
                      case 4:
                      return 'Siswa';
                      default:
            return 'Unknown'; 
          }
        }
        ?>
      </div>
    </div>
  </a>
</li>
<li>
  <div class="dropdown-divider"></div>
</li>
 <?php  if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) { ?>
<li>
  <a class="dropdown-item" href="<?= base_url('/home/ganti_profile_guru')?>">
    <i class="bx bx-user me-2"></i>
    <span class="align-middle">My Profile</span>
  </a>
</li>
  <?php }else{} ?>
  <?php  if(session()->get('level')== 4) { ?>
<li>
  <a class="dropdown-item" href="<?= base_url('/home/ganti_profile_siswa')?>">
    <i class="bx bx-user me-2"></i>
    <span class="align-middle">My Profile</span>
  </a>
</li>
  <?php }else{} ?>
<li>
  <a class="dropdown-item" href="<?= base_url('/home/ganti_password')?>">
    <i class="bx bx-cog me-2"></i>
    <span class="align-middle">Password</span>
  </a>
</li>
<li>
  <div class="dropdown-divider"></div>
</li>
<li>
  <a class="dropdown-item" href="<?= base_url('/home/log_out')?>">
    <i class="bx bx-power-off me-2 text-danger"></i>
    <span class="align-middle">Log Out</span>
  </a>
</li>
</ul>
</li>
</ul>
</div>
</nav>


<div class="content-wrapper">

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
          </div>
        </div>
      </div>
    </div>
