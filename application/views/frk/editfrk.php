<!-- Begin Page Content -->
<nav class="navbar" style="background-color:#61A7AF">
    <div class="input-group ml-3" style="color:#FFFFFF; font-size:1.4em">
        <b>FORM RENCANA KERJA</b>
    </div>
</nav>

<br>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) :  ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>

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
    <div class="row mb-3">
        <div class="col-md-12">
            <a href="<?= base_url('frk/tambahpendidikan'); ?>" class="btn btn-primary">Tambah Data Pendidikan</a>
            <a href="<?= base_url('frk/tambahpenelitian'); ?>" class="btn btn-primary">Tambah Data Penelitian</a>
            <a href="<?= base_url('frk/tambahpengabdian'); ?>" class="btn btn-primary">Tambah Data Pengabdian</a>
            <a href="<?= base_url('frk/tambahpublikasi'); ?>" class="btn btn-primary">Tambah Data Publikasi</a>
            <a href="<?= base_url('frk/tambahlainnya'); ?>" class="btn btn-primary">Tambah Data Lainnya</a>

        </div>
    </div>
    <?php
    if (empty($Frk)) {
    ?>
        <div class="alert alert-warning" role="alert">
            <strong>Pemberitahuan !</strong> Anda belum mengisi FRK untuk semester ini.
        </div>
    <?php
    } else { ?>
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
                            <center>Aksi</center>
                        </b></th>
                </tr>
                <tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php

                foreach ($Frk as $f) : ?>
                    <tr>
                        <td><b>
                                <center><?= $i; ?></center>
                            </b></td>
                        <td style="text-align:left">
                            <?= $f['pendidikan']; ?>
                            <?= $f['penelitian']; ?>
                            <?= $f['pengabdian']; ?>
                            <?= $f['publikasi']; ?>
                            <?= $f['lainnya']; ?>
                        </td>
                        <td><?= $f['ak']; ?></td>
                        <td><?= $f['output']; ?></td>
                        <td><?= $f['mutu']; ?></td>
                        <td><?= $f['waktu']; ?></td>
                        <td>
                            <a href="<?= base_url('frk/ubahfrk/') ?><?= $f['id']; ?>" class="badge badge-success">ubah</a>
                            <a href="<?= base_url('frk/hapus/') ?><?= $f['id']; ?>" class="badge badge-danger tombol-hapus">hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>

</div>