<table class="table table-bordered mb-5" border="3">
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
            <th colspan="3"><b>
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