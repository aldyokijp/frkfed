<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card mb-5">
                <div class="card-header">
                    Form Tambah Data Lainnya
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="lainnya" class="col-form-label">Nama Kegiatan Lainnya </label>
                            <input type="text" name="lainnya" class="form-control" id="lainnya">
                            <small class="form-text text-danger"><?= form_error('lainnya'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ak" class="col-form-label">Angka Kredit</label>
                            <input type="text" name="ak" class="form-control" id="ak">
                            <small class="form-text text-danger"><?= form_error('ak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="output" class="col-form-label">Output(KUAN)</label>
                            <input type="text" name="output" class="form-control" id="output">
                            <small class="form-text text-danger"><?= form_error('output'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                            <input type="text" name="mutu" class="form-control" id="mutu">
                            <small class="form-text text-danger"><?= form_error('mutu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                            <input type="text" name="waktu" class="form-control" id="waktu">
                            <small class="form-text text-danger"><?= form_error('waktu'); ?></small>
                        </div>

                        <button type="submit" name="tambahLainnya" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>