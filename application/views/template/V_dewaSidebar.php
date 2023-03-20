 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('C_dewaAdmin') ?>">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Pengaduan <sup>Masyarakat</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('C_dewaAdmin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->



     <hr class="sidebar-divider">

     <div class="sidebar-heading">
         Master Data
     </div>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('C_dewaAdmin/kategori') ?>">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Kategori</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('C_dewaAdmin/Masyarakat') ?>">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Masyarakat</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('C_dewaAdmin/petugas') ?>">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Petugas</span></a>
     </li>

     <hr class="sidebar-divider">

     <div class="sidebar-heading">
         Panduan
     </div>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('C_dewaAdmin/pengadu') ?>">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Pangaduan</span></a>
     </li>

     <?php if ($user['level'] == 'admin') {?>

        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Print Laporan :</h6>
                        <a class="collapse-item" href="<?=base_url('C_dewaAdmin/laporan_pdf')?>">Laporan Pengaduan</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>
         <?php }?>



     <hr class="sidebar-divider d-none d-md-block">


     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


 </ul>
 <!-- End of Sidebar -->