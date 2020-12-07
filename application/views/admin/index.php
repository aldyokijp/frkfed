<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">
            <div class=" card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a class="row no-gutters align-items-center" href="<?= base_url('user') ?>">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Profil</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user['name']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a class="row no-gutters align-items-center" href="<?= base_url('frk') ?>">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Form Rencana Kerja</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">FRK</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a class="row no-gutters align-items-center" href="<?= base_url('admin/fed') ?>">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Form Evaluasi Diri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">FED</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-book fa-2x text-gray-300"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Atur Jadwal </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Kalender</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">FRK/FED Institut Teknologi Del</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                    </div>
                    <p>Sistem ini adalah FRK dan FED berbasis aplikasi web. Sistem ini digunakan oleh dosen di Institut Teknologi Del terkhusus bagi dosen yang mengajar di program studi D4 Teknologi Rekayasa Perangkat Lunak.</p>
                    <p> FRK adalah form rencana kerja yang memiliki 3 bagian utama yaitu pelaksanaan pendidikan, pelaksanaan penelitian, dan pelaksanaan pengabdian masyakarat.
                        FED adalah form evaluasi diri yang menghitung angka kredit melalui FRK yang sudah diisi berdasarkan bagian utama tersebut. </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dosen D4 TRPL</h6>
                </div>
                <div class="card-body">
                    <p> 1. Yohanssen Pratama, S.Si, M.T <br>
                        2. Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech. <br>
                        3. Regina Ayunita Tarigan, S.Si., M.Sc <br>
                        4. Mukhammad Solikhin, S.Si, M.Si <br>
                        5. Riyanthi Angrainy Sianturi, S.Sos, M.Ds <br>
                        6. Roy Deddy Hasiholan Lumban Tobing, S.T., M.ICT <br>
                        7. Rumondang Miranda Marsaulina, S.P, M.Si <br>
                        8. Verawaty Situmorang, S.Kom., M.T.I
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->