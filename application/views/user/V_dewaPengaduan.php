<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaduan </h1>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex align-text-center">
                <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
                <!-- Button trigger modal -->
                <a href="<?= base_url('C_dewaUser/mengadu') ?>" type="submit" class="ml-auto d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    + Pengaduan
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Subkategori</th>
                            <th>Isi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                            foreach ($pengaduan as $p) : ?>
                              <tr>
                                  <td><?= $p['tanggal_pengaduan'] ?></td>
                                  <td><?= $p['kategori'] ?></td>
                                  <td><?= $p['sub_kategori'] ?></td>
                                  <td><?= $p['isi_laporan'] ?></td>
                                  <td>
                                  <?php if ($p['status'] == '0') : ?>
                                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ngadu<?= $p['id'] ?>">
                                              Tindakan
                                          </button>
                                      <?php endif ?>
                                      <?php if ($p['status'] == "proses") : ?>
                                          <a type="button" class="btn btn-warning" href="<?php base_url('')?>">
                                              Proses
                                      </a>
                                      <?php endif ?>
                                      <?php if ($p['status'] == "selesai") : ?>
                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ngadu<?= $p['id'] ?>">
                                              Selesai
                                          </button>
                                      <?php endif ?>
                                  </td>
                                </tr>
                          <?php
                            endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>