<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mp-2">SISFO-AKADEMIK SMP TERPADU </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-university"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-Menu Sekolah:</h6>
                        <a class="collapse-item" href="<?php echo base_url('administrator/jurusan') ?>">MATA PELAJARAN</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/prodi') ?>">RUANG GURU</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/matakuliah')?>">FORM INPUT NILAI</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/mahasiswa')?>"> DAFTAR SISWA</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/tahun_akademik')?>">TAHUN AKADEMIK</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('administrator/auth/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
</ul>

                </nav>