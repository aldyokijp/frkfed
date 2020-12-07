<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card mb-5">
                <div class="card-header">
                    Form Penilaian Realisasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="fed_id" value="<?= $fed['fed_id']; ?>">
                        <div class="form-group">
                            <label for="ak" class="col-form-label">Realisasi Angka Kredit</label>
                            <input type="text" name="fed_ak" class="form-control" id="ak" value="<?= $fed['fed_ak']; ?>">
                            <small class="form-text text-danger"><?= form_error('fed_ak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="output" class="col-form-label">Realisasi Output(KUAN)</label>
                            <input type="text" name="fed_output" class="form-control" id="output" value="<?= $fed['fed_output']; ?>">
                            <small class="form-text text-danger"><?= form_error('fed_output'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="mutu" class="col-form-label">Realisasi Mutu/Kualitas</label>
                            <input type="text" name="fed_mutu" class="form-control" id="mutu" value="<?= $fed['fed_mutu']; ?>">
                            <small class="form-text text-danger"><?= form_error('fed_mutu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="waktu" class="col-form-label">Realisasi Waktu Kegiatan</label>
                            <input type="text" name="fed_waktu" class="form-control" id="waktu" value="<?= $fed['fed_waktu']; ?>">
                            <small class="form-text text-danger"><?= form_error('fed_waktu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="skp" class="col-form-label">Nilai Capaian SKP</label>
                            <input type="text" name="skp" class="form-control" id="skp" value="<?= $fed['skp']; ?>">
                            <small class="form-text text-danger"><?= form_error('skp'); ?></small>
                        </div>
                        <button type="submit" name="ubahfed" class="btn btn-primary float-right">Simpan Penilaian</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>