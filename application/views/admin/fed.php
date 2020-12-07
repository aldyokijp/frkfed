<!-- Begin Page Content -->
<nav class="navbar" style="background-color:#61A7AF">
  <div class="input-group ml-2" style="color:#FFFFFF; font-size:1.4em">
    <b>FORM EVALUASI DIRI</b>
  </div>
</nav>

<div class="container-fluid mt-4">
  <!-- Page Heading -->
  <div class="card">
    <h5 class="card-header">Dosen yang Telah Mengisi FRK</h5>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" style="width: 10%">No</th>
            <th scope="col" style="width: 70%">Nama Dosen</th>
            <th scope="col" style="width: 20%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php

          foreach ($User as $u) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $u['name']; ?></td>
              <td>
                <?php
                $value = $u['email'];
                $accept = $u['accepted'];
                ?>
                <a value="<?= $value ?>" href="<?php $_SESSION["fed"] = $value;
                                                $_SESSION["accepted"] = $accept; ?><?= base_url('admin/fed_final'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="border-radius: 20px; width:100%"><i class="fas fa-check fa-sm text-white-50"></i> Cek FED</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <br>
  <br>


</div>
<br>
<br><br><br><br><br>


</div>
<!-- /.container-fluid -->