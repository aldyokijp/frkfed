<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" name="nidn" class="form-control" id="nidn" value="<?= $user['nidn']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $user['jabatan']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" name="gender" id="gender">
                        <option value="Laki-laki">Laki laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="hp" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                    <input type="text" name="hp" class="form-control" id="hp" value="<?= $user['hp']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="address" value="<?= $user['address']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="pos" class="col-sm-2 col-form-label">Kode Pos</label>
                <div class="col-sm-10">
                    <input type="text" name="pos" class="form-control" id="pos" value="<?= $user['pos']; ?>">
                </div>
            </div>

            <h3><b>Strata-1 (S1)</b></h3>

            <div class="form-group row">
                <label for="prodi1" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" name="prodi1" class="form-control" id="prodi1" value="<?= $user['prodi1']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="university1" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
                <div class="col-sm-10">
                    <input type="text" name="university1" class="form-control" id="university1" value="<?= $user['university1']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="tahun1" class="col-sm-2 col-form-label">Tahun Lulus</label>
                <div class="col-sm-10">
                    <input type="text" name="tahun1" class="form-control" id="tahun1" value="<?= $user['tahun1']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="gelar1" class="col-sm-2 col-form-label">Gelar</label>
                <div class="col-sm-10">
                    <input type="text" name="gelar1" class="form-control" id="gelar1" value="<?= $user['gelar1']; ?>">
                </div>
            </div>

            <h3><b>Strata-2 (S2)</b></h3>

            <div class="form-group row">
                <label for="prodi2" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" name="prodi2" class="form-control" id="prodi2" value="<?= $user['prodi2']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="university2" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
                <div class="col-sm-10">
                    <input type="text" name="university2" class="form-control" id="university2" value="<?= $user['university2']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="tahun2" class="col-sm-2 col-form-label">Tahun Lulus</label>
                <div class="col-sm-10">
                    <input type="text" name="tahun2" class="form-control" id="tahun2" value="<?= $user['tahun2']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="gelar2" class="col-sm-2 col-form-label">Gelar</label>
                <div class="col-sm-10">
                    <input type="text" name="gelar2" class="form-control" id="gelar2" value="<?= $user['gelar2']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">Choose File </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>


            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->