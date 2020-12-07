<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card mb-5">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $frk['id']; ?>">
                        <div class="form-group">
                            <label for="lainnya" class="col-form-label">Nama Kegiatan </label>
                            <input type="text" name="lainnya" class="form-control" id="lainnya" value="<?= $frk['pendidikan']; ?><?= $frk['penelitian']; ?><?= $frk['pengabdian']; ?><?= $frk['publikasi']; ?><?= $frk['lainnya']; ?>">
                            <small class="form-text text-danger"><?= form_error('lainnya'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ak" class="col-form-label">Angka Kredit</label>
                            <input type="text" name="ak" class="form-control" id="ak" value="<?= $frk['ak']; ?>">
                            <small class="form-text text-danger"><?= form_error('ak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="output" class="col-form-label">Output(KUAN)</label>
                            <input type="text" name="output" class="form-control" id="output" value="<?= $frk['output']; ?>">
                            <small class="form-text text-danger"><?= form_error('output'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                            <input type="text" name="mutu" class="form-control" id="mutu" value="<?= $frk['mutu']; ?>">
                            <small class="form-text text-danger"><?= form_error('mutu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                            <input type="text" name="waktu" class="form-control" id="waktu" value="<?= $frk['waktu']; ?>">
                            <small class="form-text text-danger"><?= form_error('waktu'); ?></small>
                        </div>

                        <button type="submit" name="ubahfrk" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>