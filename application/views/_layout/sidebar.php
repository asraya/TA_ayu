<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>dashboard/index">SHOWROOM ANGGA MOTOR</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>dashboard/index">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>

      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

      <li class="menu-header">Starter</li>
      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/data_mobil"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Example/index_0"><i class="fas fa-fire"></i> <span>Data Type</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Example/index_0"><i class="fas fa-user"></i> <span>Data Customer</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Example/index_0"><i class="fas fa-user"></i> <span>Transaksi</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Example/index_0"><i class="fas fa-user"></i> <span>Laporan</span></a></li>



    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
      </a>
    </div>
  </aside>
</div>