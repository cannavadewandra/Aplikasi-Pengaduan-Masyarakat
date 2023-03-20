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
                  <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Pelapor</th>
                              <th>Tanggal</th>
                              <th>Kategori</th>
                              <th>Isi</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($pengaduan as $p) : ?>
                          <tr>
                              <td><?= $p['nama'] ?></td>
                              <td><?= $p['tanggal_pengaduan'] ?></td>
                              <td><?= $p['kategori'] ?></td>
                              <td><?= $p['isi_laporan'] ?></td>
                              <td><?= $p['status'] ?></td>
                              <?php endforeach ?>
                          </tr>
                      </tbody>


                  </table>
              </div>
          </div>
      </div>
  </div>
  </div>