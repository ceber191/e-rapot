 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <?php if ($this->session->userdata('akses')=='admin') { ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Gambar">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Gambar</span></a>
      </li>
    
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Kelas">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kelas</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Mapel">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Mapel</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Nilai">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nilai</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Siswa">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Siswa</span></a>
      </li>
<?php } else if ($this->session->userdata('akses') =='siswa') { ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>rapot">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Rapot</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>rapot/grafik">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>grafik</span></a>
      </li>
    <?php } ?>
      <!-- Divider -->
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    