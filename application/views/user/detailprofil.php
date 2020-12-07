<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= base_url('user/edit'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px;"><i class="fas fa-pen fa-sm text-white-50"></i> Edit Profil</a>
    </div>

    <div class="row mb-5">

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3" style="background-color: #61A7AF;">
                    <h6 class="m-0 font-weight-bold text-dark">Profil</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;display:block;margin:auto" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4">Nama</label>
                            <div class="col-sm-8"> : <?= $user['name']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="nidn" class="col-sm-4">NIDN</label>
                            <div class="col-sm-8"> : <?= $user['nidn']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-4">Jabatan Fungsional</label>
                            <div class="col-sm-8"> : <?= $user['jabatan']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-4">Jenis Kelamin</label>
                            <div class="col-sm-8"> : <?= $user['gender']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4">Email</label>
                            <div class="col-sm-8"> : <?= $user['email']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="hp" class="col-sm-4">No HP</label>
                            <div class="col-sm-8"> : <?= $user['hp']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4">Alamat</label>
                            <div class="col-sm-8"> : <?= $user['address']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="pos" class="col-sm-4">Kode Pos</label>
                            <div class="col-sm-8"> : <?= $user['pos']; ?>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3" style="background-color: #61A7AF;">
                    <h6 class="m-0 font-weight-bold text-dark">Pendidikan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form>
                        <h4><b>Strata-1(S1)</b></h4>
                        <hr>
                        <div class="form-group row">
                            <label for="prodi1" class="col-sm-4">Program Studi</label>
                            <div class="col-sm-8"> : <?= $user['prodi1']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="university1" class="col-sm-4">Perguruan Tingii</label>
                            <div class="col-sm-8"> : <?= $user['university1']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="tahun1" class="col-sm-4">Tahun Lulus</label>
                            <div class="col-sm-8"> : <?= $user['tahun1']; ?>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <h4><b>Strata-2(S2)</b></h4>
                        <hr>
                        <div class="form-group row">
                            <label for="prodi2" class="col-sm-4">Program Studi</label>
                            <div class="col-sm-8"> : <?= $user['prodi2']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="university2" class="col-sm-4">Perguruan Tinggi</label>
                            <div class="col-sm-8"> : <?= $user['university2']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="tahun2" class="col-sm-4">Tahun Lulus</label>
                            <div class="col-sm-8"> : <?= $user['tahun2']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="gelar2" class="col-sm-4">Gelar</label>
                            <div class="col-sm-8"> : <?= $user['gelar1']; ?>, <?= $user['gelar2']; ?>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->