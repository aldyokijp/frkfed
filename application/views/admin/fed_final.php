<!-- Begin Page Content -->
<nav class="navbar" style="background-color:#61A7AF">
    <div class="input-group ml-2" style="color:#FFFFFF; font-size:1.4em">
        <b>FORM EVALUASI DIRI</b>
    </div>
</nav>

<br>
<div class="container-fluid">
    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <?php

        if ($_SESSION["accepted"] == 0) {

        ?>
            <a href="<?= base_url('admin/editfed'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" style="border-radius: 20px; "><i class="fas fa-edit fa-sm text-white-50"></i> Edit FED</a>

            <a href="<?= base_url('admin/fed_final');
                        $_SESSION["accepted"] = 1; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px; "><i class="fas fa-check fa-sm text-white-50"></i> Setujui FED</a>
        <?php } else if ($_SESSION["accepted"] == 1) {

        ?>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-download fa-sm text-white-50"></i> Eksport
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url('admin/cetakLaporan'); ?>"><i class="fa fa-file-pdf"> </i> Eksport PDF </a>
                    <a class="dropdown-item" href="<?= base_url('admin/excel'); ?>""><i class=" fa fa-file-excel"> </i> Eksport EXCEL </a>
                </div>
            </div>
            <a href=" <?= base_url('admin/fed_final');
                        $_SESSION["accepted"] = 0; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" style="border-radius: 20px; "><i class="fas fa-remove fa-sm text-white-50"></i> Batal Menyetujui FED</a>

        <?php } ?>
    </div>
    <script type="text/javascript">
  $("button").click(function(){
      bootbox.prompt("Write sometext here?", function(result) {                
            $("button").after("<br/>Your Text: " + result);
      });
  });
</script>
    <div class="d-sm-flex align-items-center ">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="color: black; font-size: small;">
                    <th rowspan="2">
                        <center>No</center>
                    </th>
                    <th rowspan="2">
                        <center>Kegiatan Tugas Jabatan</center>
                    </th>
                    <th colspan="4">
                        <center>Target</center>
                    </th>
                    <th colspan="4">
                        <center>Realisasi</center>
                    </th>
                    <th rowspan="2">
                        <center>Nilai Capaian SKP</center>
                    </th>
                </tr>
                <tr style="color: black;">
                    <th>
                        <center>AK</center>
                    </th>
                    <th>
                        <center>Output (KUAN)</center>
                    </th>
                    <th>
                        <center>Mutu (KUAL)</center>
                    </th>
                    <th>
                        <center>Waktu</center>
                    </th>
                    <th>
                        <center>AK</center>
                    </th>
                    <th>
                        <center>Output (KUAN)</center>
                    </th>
                    <th>
                        <center>Mutu (KUAL)</center>
                    </th>
                    <th>
                        <center>Waktu</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php

                foreach ($Fed as $e) : ?>
                    <tr>
                        <th>
                            <?= $i ?>
                        </th>
                        <th>
                            <?= $e['pendidikan']; ?>
                            <?= $e['penelitian']; ?>
                            <?= $e['pengabdian']; ?>
                            <?= $e['publikasi']; ?>
                            <?= $e['lainnya']; ?>
                        </th>
                        <th><?= $e['ak']; ?></th>
                        <th><?= $e['output']; ?></th>
                        <th><?= $e['mutu']; ?></th>
                        <th><?= $e['waktu']; ?></th>
                        <th><?= $e['fed_ak']; ?></th>
                        <th><?= $e['fed_output']; ?></th>
                        <th><?= $e['fed_mutu']; ?></th>
                        <th><?= $e['fed_waktu']; ?></th>
                        <th><?= $e['skp']; ?></th>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
</div>
<br>
<br>
<br>
<br>

</div>
<!-- /.container-fluid -->