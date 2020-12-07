<!-- Begin Page Content -->
<nav class="navbar" style="background-color:#61A7AF">
    <div class="input-group ml-3" style="color:#FFFFFF; font-size:1.4em">
        <b>FORM RENCANA KERJA</b>
    </div>
</nav>

<br>
<div class="container-fluid mb-5">
    <!-- Page Heading -->

    <table class="table table-stripped">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><b>PEJABAT PENILAI</b></th>
                <th scope="col"></th>
                <th scope="col"><b>DOSEN/TENAGA PENDIDIK YANG DINILAI</b></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Nama</th>
                <td>Yohanssen Pratama</td>
                <td><b>Nama</b></td>
                <td><?= $user['name']; ?></td>
            </tr>
            <tr>
                <th scope="row">NIDN</th>
                <td>012103041</td>
                <th scope="row">NIDN</th>
                <td><?= $user['nidn']; ?></td>
            </tr>
            <tr>
                <th scope="row">Pangkat/Gol</th>
                <td>Asisten Ahli/ IIB</td>
                <th scope="row">Pangkat/Gol</th>
                <td><?= $user['jabatan']; ?></td>
            </tr>
            <tr>
                <th scope="row">Jabatan</th>
                <td>Kaprodi</td>
                <th scope="row">Jabatan</th>
                <td>Dosen tetap IT Del</td>
            </tr>
            <tr>
                <th scope="row">Unit Kerja</th>
                <td>Program Studi DIV Teknik Rekayasa Perangkat Lunak</td>
                <th scope="row">Unit Kerja</th>
                <td>Program Studi DIV Teknik Rekayasa Perangkat Lunak</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th rowspan="2"><b>
                        <center>No</center>
                    </b></th>
                <th rowspan="2"><b>
                        <center>Kegiatan Tugas Jabatan</center>
                    </b></th>
                <th rowspan="2"><b>
                        <center>AK</center>
                    </b></th>
                <th colspan="6"><b>
                        <center>Target</center>
                    </b></th>
            </tr>
            <tr>
                <th><b>
                        <center>Output (KUAN)</center>
                    </b></th>
                <th><b>
                        <center>Mutu (KUAL)</center>
                    </b></th>
                <th><b>
                        <center>Waktu</center>
                    </b></th>
                <th><b>
                        <center>Biaya</center>
                    </b></th>
                <th><b>
                        <center>Aksi</center>
                    </b></th>
            </tr>
            <tr>
        </thead>
        <tbody>

            <td><b>
                    <center>I.</center>
                </b></td>
            <td style="text-align:left"><b>Pendidikan
                    <select class="form-control">
                        <option value="">--</option>
                        <option value="">Perkuliahan</option>
                    </select>
                </b></td>
            <td>0.5</td>
            <td>4 SKS</td>
            <td>100</td>
            <td>12 BULAN</td>
            <td>-</td>
            <td>
                <a href="" data-toggle="modal" data-target="#pendidikan" class="badge badge-primary">tambah</a>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
            </td>
            </tr>
            <tr>
                <td><b>
                        <center>II.</center>
                    </b></td>
                <td style="text-align:left"><b>Penelitian
                        <select class="form-control">
                            <option value="">--</option>
                            <option value="">Penelitian Desa</option>
                        </select>
                    </b></td>
                <td>2</td>
                <td>1 Penelitian</td>
                <td>100</td>
                <td>12 BULAN</td>
                <td>-</td>
                <td>
                    <a href="" data-toggle="modal" data-target="#penelitian" class="badge badge-primary">tambah</a>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td><b>
                        <center>III.</center>
                    </b></td>
                <td style="text-align:left"><b>Pengabdian Masyarakat
                        <select class="form-control">
                            <option value="">--</option>
                            <option value="">Pembelajaran </option>
                        </select>
                    </b></td>
                <td>2</td>
                <td>1 Kegiatan</td>
                <td>100</td>
                <td>12 BULAN</td>
                <td>-</td>
                <td>
                    <a href="" data-toggle="modal" data-target="#masyarakat" class="badge badge-primary">tambah</a>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td><b>
                        <center>IV.</center>
                    </b></td>
                <td style="text-align:left"><b>Publikasi
                        <select class="form-control">
                            <option value="">--</option>
                            <option value="">Vehicle Counting</option>
                        </select>
                    </b></td>
                <td>2</td>
                <td>1 Publikasi</td>
                <td>100</td>
                <td>12 BULAN</td>
                <td>-</td>
                <td>
                    <a href="" data-toggle="modal" data-target="#publikasi" class="badge badge-primary">tambah</a>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td><b>
                        <center>V.</center>
                    </b></td>
                <td style="text-align:left"><b>Lainnya
                        <select class="form-control">
                            <option value="">--</option>
                            <option value=""></option>
                        </select>
                    </b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" data-toggle="modal" data-target="#lainnya" class="badge badge-primary">tambah</a>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <button type="submit" class="btn btn-primary">save</button>
        <button type="reset" class="btn btn-danger">cancel</button>
    </div>

</div>

<!-- modal tambah pendidikan -->
<div class="modal fade" id="pendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pendidikanLabel">Kegiatan Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Kegiatan</label>
                        <div class="col-form">
                            <select class="form-control" name="nama" id="nama">
                                <option value="" default>Pilih Salah satu</option>
                                <option value="aok">Arsitektur dan Organisasi Komputer</option>
                                <option value="alsrudat">Algoritma Struktur Data</option>
                                <option value="akpl">Analisis Kebutuhan Perangkat Lunak</option>
                                <option value="alu">Algoritma Lanjut</option>
                                <option value="automata">Automata</option>
                                <option value="eng1">Bahasa Inggris I</option>
                                <option value="eng2">Bahasa Inggris II</option>
                                <option value="eng3">Bahasa Inggris III</option>
                                <option value="eng4">Bahasa Inggris IV</option>
                                <option value="eng5">Bahasa Inggris V</option>
                                <option value="daspro">Dasar Pemrograman</option>
                                <option value="inovasi">Inovasi Digital</option>
                                <option value="jarkom">Jaringan Komputer</option>
                                <option value="kepal">Keamanan Perangkat Lunak</option>
                                <option value="login">Logika Informatika</option>
                                <option value="matdis">Matematika Diskrit</option>
                                <option value="metpen">Metedologi Penelitian</option>
                                <option value="delcha">Pembentukan Karakter Del</option>
                                <option value="pm">Pembelajaran Mesin</option>
                                <option value="psw1">Pengembangan Situs Web I</option>
                                <option value="psw2">Pengembangan Situs Web II</option>
                                <option value="pbd">Pengembangan Basis Data</option>
                                <option value="oosd">Pengembangan Perangkat Lunak Berorientasi Objek</option>
                                <option value="pasti">Pengembangan Aplikasi Terdistribusi</option>
                                <option value="pam">Pengembangan Aplikasi Mobile</option>
                                <option value="prpl">Pengenalan Rekayasa Perangkat Lunak</option>
                                <option value="pnki">Penulisan Karya Ilmiah</option>
                                <option value="pupl">Pengujian Perangkat Lunak</option>
                                <option value="pap">Perancangan Antarmuka Pengguna</option>
                                <option value="probstat">Probabilitas dan Statiska</option>
                                <option value="pbo">Pemograman Berorientasi Objek</option>
                                <option value="pa1">Proyek Akhir Tahun I</option>
                                <option value="pa2">Proyek Akhir Tahun II</option>
                                <option value="pa3">Proyek Akhir Tahun III</option>
                                <option value="pa4">Proyek Akhir Tahun IV</option>
                                <option value="sbd">Sistem Basis Data</option>
                                <option value="sisop">Sistem Operasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="col-form-label">Jumlah SKS</label>
                        <input type="text" class="form-control" id="sks">
                    </div>
                    <div class="form-group">
                        <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                        <input type="text" class="form-control" id="mutu">
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                        <input type="text" class="form-control" id="waktu">
                    </div>
                    <div class="form-group">
                        <label for="biaya" class="col-form-label">Biaya</label>
                        <input type="text" class="form-control" id="biaya">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah penelitian -->
<div class="modal fade" id="penelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pendidikanLabel">Kegiatan Penelitian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Kegiatan</label>
                        <div class="col-form">
                            <select class="form-control" name="nama" id="nama">
                                <option value="" default>Pilih Salah satu</option>
                                <option value="penelitian">Penelitian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="col-form-label">Jumlah Penelitian</label>
                        <input type="text" class="form-control" id="sks">
                    </div>
                    <div class="form-group">
                        <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                        <input type="text" class="form-control" id="mutu">
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                        <input type="text" class="form-control" id="waktu">
                    </div>
                    <div class="form-group">
                        <label for="biaya" class="col-form-label">Biaya</label>
                        <input type="text" class="form-control" id="biaya">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah pengabdian masyarakat -->
<div class="modal fade" id="masyarakat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pendidikanLabel">Kegiatan Pengabdian Masyarakat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="masyarakat" class="col-form-label">Jumlah Pengabdian Masyarakat</label>
                        <input type="text" class="form-control" id="masyarakat">
                    </div>
                    <div class="form-group">
                        <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                        <input type="text" class="form-control" id="mutu">
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                        <input type="text" class="form-control" id="waktu">
                    </div>
                    <div class="form-group">
                        <label for="biaya" class="col-form-label">Biaya</label>
                        <input type="text" class="form-control" id="biaya">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah publikasi -->
<div class="modal fade" id="publikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pendidikanLabel">Kegiatan Publikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="publikasi" class="col-form-label">Jumlah Publikasi</label>
                        <input type="text" class="form-control" id="publikasi">
                    </div>
                    <div class="form-group">
                        <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                        <input type="text" class="form-control" id="mutu">
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                        <input type="text" class="form-control" id="waktu">
                    </div>
                    <div class="form-group">
                        <label for="biaya" class="col-form-label">Biaya</label>
                        <input type="text" class="form-control" id="biaya">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah lainnya -->
<div class="modal fade" id="lainnya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pendidikanLabel">Kegiatan Lainnya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="lainnya" class="col-form-label">Jumlah Kegiatan</label>
                        <input type="text" class="form-control" id="lainnya">
                    </div>
                    <div class="form-group">
                        <label for="mutu" class="col-form-label">Mutu/Kualitas</label>
                        <input type="text" class="form-control" id="mutu">
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-form-label">Waktu Kegiatan</label>
                        <input type="text" class="form-control" id="waktu">
                    </div>
                    <div class="form-group">
                        <label for="biaya" class="col-form-label">Biaya</label>
                        <input type="text" class="form-control" id="biaya">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>