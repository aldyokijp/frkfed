<!-- Begin Page Content -->
<nav class="navbar" style="background-color:#61A7AF">
    <div class="input-group ml-3" style="color:#FFFFFF; font-size:1.4em">
        <b>FORM RENCANA KERJA</b>
    </div>
</nav>

<div class="container-fluid mt-4 mb-5">
    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?php
        if (empty($Frk)) {
        ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= base_url('frk/editfrk'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px;"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah FRK</a>
            </div>
        <?php
        } else { ?>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-download fa-sm text-white-50"></i> Eksport
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url('frk/cetakLaporan'); ?>"><i class="fa fa-file-pdf"> </i> Eksport PDF </a>
                    <a class="dropdown-item" href="<?= base_url('frk/excel'); ?>""><i class=" fa fa-file-excel"> </i> Eksport EXCEL </a>
                </div>
            </div>
            <a href="<?= base_url('frk/editfrk'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px;"><i class="fas fa-pen fa-sm text-white-50"></i> Edit FRK</a>

        <?php } ?>
    </div>

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
    <?php
    if (empty($Frk)) {
    ?>
        <div class="alert alert-warning" role="alert">
            <strong>Pemberitahuan !</strong> Anda belum mengisi FRK untuk semester ini.
        </div>
    <?php
    } else { ?>
        <table class="table table-bordered mb-5">
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
                    <th colspan="4"><b>
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
                </tr>
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
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
</div>