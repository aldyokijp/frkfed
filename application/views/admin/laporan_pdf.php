<table class="table table-bordered" border="3">
    <thead class="thead-dark">
        <tr style="color: black; font-size: small;">
            <th rowspan="2">
                <center>No</center>
            </th>
            <th rowspan="2">
                <center>Kegiatan Tugas Jabatan</center>
            </th>
            <th colspan="5">
                <center>Target</center>
            </th>
            <th colspan="3">
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