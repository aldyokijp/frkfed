<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card mb-5">
                <div class="card-header">
                    Form Tambah Data Pendidikan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="pendidikan" class="col-form-label">Nama Kegiatan</label>
                            <div class="col-form">
                                <select class="form-control" name="pendidikan" id="pendidikan">
                                    <option value="" default>Pilih Salah satu</option>
                                    <option value="Arsitektur dan Organisasi Komputer">Arsitektur dan Organisasi Komputer</option>
                                    <option value="Algoritma Struktur Data">Algoritma Struktur Data</option>
                                    <option value="Analisis Kebutuhan Perangkat Lunak">Analisis Kebutuhan Perangkat Lunak</option>
                                    <option value="Algoritma Lanjut">Algoritma Lanjut</option>
                                    <option value="Automata">Automata</option>
                                    <option value="Bahasa Inggris I">Bahasa Inggris I</option>
                                    <option value="Bahasa Inggris II">Bahasa Inggris II</option>
                                    <option value="Bahasa Inggris III">Bahasa Inggris III</option>
                                    <option value="Bahasa Inggris IV">Bahasa Inggris IV</option>
                                    <option value="Bahasa Inggris V">Bahasa Inggris V</option>
                                    <option value="Dasar Pemrograman">Dasar Pemrograman</option>
                                    <option value="Inovasi Digital">Inovasi Digital</option>
                                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                                    <option value="Keamanan Perangkat Lunak">Keamanan Perangkat Lunak</option>
                                    <option value="Logika Informatika">Logika Informatika</option>
                                    <option value="Matematika Diskrit">Matematika Diskrit</option>
                                    <option value="Metedologi Penelitian">Metedologi Penelitian</option>
                                    <option value="Pembentukan Karakter Del">Pembentukan Karakter Del</option>
                                    <option value="Pembelajaran Mesin">Pembelajaran Mesin</option>
                                    <option value="Pengembangan Situs Web I">Pengembangan Situs Web I</option>
                                    <option value="Pengembangan Situs Web II">Pengembangan Situs Web II</option>
                                    <option value="Pengembangan Basis Data">Pengembangan Basis Data</option>
                                    <option value="Pengembangan Perangkat Lunak Berorientasi Objek">Pengembangan Perangkat Lunak Berorientasi Objek</option>
                                    <option value="Pengembangan Aplikasi Terdistribusi">Pengembangan Aplikasi Terdistribusi</option>
                                    <option value="Pengembangan Aplikasi Mobile">Pengembangan Aplikasi Mobile</option>
                                    <option value="Pengenalan Rekayasa Perangkat Lunak">Pengenalan Rekayasa Perangkat Lunak</option>
                                    <option value="Penulisan Karya Ilmiah">Penulisan Karya Ilmiah</option>
                                    <option value="Pengujian Perangkat Lunak">Pengujian Perangkat Lunak</option>
                                    <option value="Perancangan Antarmuka Pengguna">Perancangan Antarmuka Pengguna</option>
                                    <option value="Probabilitas dan Statiska">Probabilitas dan Statiska</option>
                                    <option value="Pemograman Berorientasi Objek">Pemograman Berorientasi Objek</option>
                                    <option value="Proyek Akhir Tahun I">Proyek Akhir Tahun I</option>
                                    <option value="Proyek Akhir Tahun II">Proyek Akhir Tahun II</option>
                                    <option value="Proyek Akhir Tahun III">Proyek Akhir Tahun III</option>
                                    <option value="Proyek Akhir Tahun IV">Proyek Akhir Tahun IV</option>
                                    <option value="Sistem Basis Data">Sistem Basis Data</option>
                                    <option value="Sistem Operasi">Sistem Operasi</option>
                                </select>
                            </div>
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

                        <button type="submit" name="tambahPendidikan" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>