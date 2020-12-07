<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= base_url('user/edit'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px;"><i class="fas fa-pen fa-sm text-white-50"></i> Edit Profil</a>
    </div>

    <div class="row">

        <div class="col-lg-6 mb-4 ">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3" style="background-color: #61A7AF;">
                    <h6 class="m-0 font-weight-bold text-dark">Profil</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="text-left">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;display:block;margin:auto" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        <hr class="sidebar-divider my-3">
                        <div>Nama <span class="ml-5"><span class="ml-5"> <span class="ml-5"> : <?= $user['name']; ?></span></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>NIDN <span class="ml-5"><span class="ml-5"> <span class="ml-5"> : <?= $user['nidn']; ?></span></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>Jabatan Fungsional <span class="ml-5"> : <?= $user['jabatan']; ?></span></div>
                        <hr class="sidebar-divider my-3">
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4 ">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3" style="background-color: #61A7AF;">
                    <h6 class="m-0 font-weight-bold text-dark">Pendidikan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="text-left">
                        <hr class="sidebar-divider my-3">
                        <div>Jenjang Pendidikan <span class="ml-5"> &nbsp; : S2 </span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>Bidang Studi <span class="ml-5"><span class="ml-5">&nbsp;: <?= $user['prodi2']; ?></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>Perguruan Tinggi <span class="ml-5"><span class="ml-3">&nbsp;: <?= $user['university2']; ?></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>Tahun Lulus <span class="ml-5"><span class="ml-5"><span class="ml-1">&nbsp; : <?= $user['tahun2']; ?></span></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <div>Gelar <span class="ml-5"><span class="ml-5"><span class="ml-5">&nbsp; &nbsp;: <?= $user['gelar2']; ?></span></span></span>
                        </div>
                        <hr class="sidebar-divider my-3">
                        <br><br>
                        <div class="text-right"><a href="<?= base_url('user/detailprofil'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Lihat Detail</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->