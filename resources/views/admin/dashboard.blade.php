@extends('layout.mainlayout')

@section('title', 'Dashboard')

@section('content')


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/index" class="brand-link">
            <i class="fa-solid fa-school elevation-3" style="opacity: .8"></i>
            <span class="brand-text font-weight-light">Academic System</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/index" class="d-block">{{ $admins->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/index" class="nav-link active">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <!-- Add icons to the links using the .nav-icon class
                                                                       with font-awesome or any other icon font library -->

                    {{-- Akses Admin --}}
                    <li class="nav-item">
                        {{-- jika salah satu nav dibawah ini dipilih maka tambahkan menu-open --}}
                        <a href="#" class="nav-link">
                            {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                            <i class="nav-icon fa-solid fa-bars-progress"></i>
                            <p>
                                Manajemen
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/guru" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/kelas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pelajaran" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Pelajaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/jadwal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Jadwal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengguna" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Pengguna</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Akses Guru --}}
                    <li class="nav-item">
                        {{-- jika salah satu nav dibawah ini dipilih maka tambahkan menu-open --}}
                        <a href="#" class="nav-link">
                            {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                            <i class="nav-icon fa-solid fa-bars-progress"></i>
                            <p>
                                Manajemen
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/kelas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/tugas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Tugas</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Akses Guru --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-book"></i>
                            <p>
                                Jadwal Pelajaran
                            </p>
                        </a>
                    </li>

                    {{-- Akses Siswa --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-book"></i>
                            <p>
                                Jadwal Pelajaran
                            </p>
                        </a>
                    </li>

                    {{-- Akses Siswa --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-list-check"></i>
                            <p>
                                Tugas - Tugas
                            </p>
                        </a>
                    </li>

                    {{-- Akses Guru --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-ranking-star"></i>
                            <p>
                                Input Nilai
                            </p>
                        </a>
                    </li>

                    {{-- Akses Siswa --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-ranking-star"></i>
                            <p>
                                Nilai Akademik
                            </p>
                        </a>
                    </li>

                    {{-- Akses Admin --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-chart-simple"></i>
                            <p>
                                Laporan Akademik
                            </p>
                        </a>
                    </li>

                    {{-- Akses Guru --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-chart-simple"></i>
                            <p>
                                Lap. Akademik Siswa
                            </p>
                        </a>
                    </li>

                    {{-- Akses Siswa --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-chart-simple"></i>
                            <p>
                                Laporan Akademik
                            </p>
                        </a>
                    </li>

                    {{-- Akses Admin --}}
                    <li class="nav-item">
                        <a href="/index" class="nav-link">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>
                                Log Aktivitas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-gears"></i>
                            <p>
                                Pengaturan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            {{-- Akses Guru admin dan siswa --}}
                            <li class="nav-item">
                                <a href="/profil" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profil</p>
                                </a>
                            </li>

                            {{-- Akses guru --}}
                            <li class="nav-item">
                                <a href="/hubungi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hubungi Admin</p>
                                </a>
                            </li>

                            {{-- Akses guru --}}
                            <li class="nav-item">
                                <a href="/hubungi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hubungi Guru</p>
                                </a>
                            </li>

                            {{-- Akses Siswa --}}
                            <li class="nav-item">
                                <a href="/about" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Help</p>
                                </a>
                            </li>

                            {{-- Akses Admin --}}
                            <li class="nav-item">
                                <a href="/about" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>




                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Siswa</span>
                                <span class="info-box-number">
                                    10
                                    <small>Orang</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Guru</span>
                                <span class="info-box-number">
                                    10
                                    <small>Orang</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-indigo elevation-1">
                                <i class="fa-solid fa-book"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Pelajaran</span>
                                <span class="info-box-number">
                                    10
                                    <small>Pelajaran</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-navy elevation-1">
                                <i class="fa-solid fa-landmark"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Kelas</span>
                                <span class="info-box-number">
                                    10
                                    <small>Kelas</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Statistik Kehadiran Siswa</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>Kehadiran: 1 Jan, 2023 - 30 Jun, 2023</strong>
                                        </p>

                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>Statistik</strong>
                                        </p>

                                        <div class="progress-group">
                                            Hadir
                                            <span class="float-right"><b>75</b>/100</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->

                                        <div class="progress-group">
                                            Tidak Hadir
                                            <span class="float-right"><b>5</b>/100</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" style="width: 5%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Izin</span>
                                            <span class="float-right"><b>10</b>/100</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" style="width: 10%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            Sakit
                                            <span class="float-right"><b>10</b>/100</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" style="width: 10%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i>
                                                17%</span>
                                            <h5 class="description-header">35,210.43</h5>
                                            <span class="description-text">TOTAL Hadir</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-warning"><i
                                                    class="fas fa-caret-left"></i>
                                                0%</span>
                                            <h5 class="description-header">10,390.90</h5>
                                            <span class="description-text">TOTAL Tidak Hadir</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i>
                                                20%</span>
                                            <h5 class="description-header">24,813.53</h5>
                                            <span class="description-text">TOTAL Izin</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-danger"><i
                                                    class="fas fa-caret-down"></i>
                                                18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">Total Sakit</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
