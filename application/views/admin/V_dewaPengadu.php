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
                              <th>Detail</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1;
                            foreach ($pengaduan as $p) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $p['nama'] ?></td>
                                  <td><?= $p['tanggal_pengaduan'] ?></td>
                                  <td><?= $p['kategori'] ?></td>
                                  <td><?= $p['isi_laporan'] ?></td>

                                  <td>
                                      <!-- detail modal -->
                                      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#detail<?= $p['id_pengaduan'] ?>">
                                          Detail
                                      </button>

                                      <!-- Modal -->
                                      <div class="modal fade" id="detail<?= $p['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Detail Pengaduan</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="post" action="<?= base_url('C_dewaAdmin/upload_pengaduan/') . $p['id_pengaduan'] ?>">
                                                          <fieldset disabled>
                                                              <div class="row">
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Pelapor</label>
                                                                      <input type="text" class="form-control" id="pelapor" aria-describedby="emailHelp" value="<?= $p['nama'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputPassword1">Tanggal</label>
                                                                      <input type="date" class="form-control" id="tanggal" value="<?= $p['tanggal_pengaduan'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-12">
                                                                      <label for="exampleInputEmail1">Nik</label>
                                                                      <input type="text" class="form-control" id="subkategori" aria-describedby="emailHelp" value="<?= $p['nik'] ?>"></input>
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Kategori</label>
                                                                      <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" value="<?= $p['kategori'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Subkategori</label>
                                                                      <input type="text" class="form-control" id="subkategori" aria-describedby="emailHelp" value="<?= $p['sub_kategori'] ?>">
                                                                  </div>
                                                              </div>
                                                              <div class="mb-3">
                                                                  <label for="exampleInputEmail1">Isi Pengaduan</label>
                                                                  <textarea type="text" class="form-control" id="subkategori" aria-describedby="emailHelp" value=""><?= $p['isi_laporan'] ?></textarea>
                                                              </div>
                                                              <div class="mb-3">
                                                                <p>Foto</p>
                                                                <img src="<?=base_url('assets/img/uploads/') . $p['foto']?>" 
                                                                alt="" width="400px">
                                                              </div>
                                                          </fieldset>
                                                          
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>

                                  <td>
                                      <!-- Button trigger modal -->
                                      <?php if ($p['status'] == '0') : ?>
                                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ngadu<?= $p['id_pengaduan'] ?>">
                                              Tindakan
                                          </button>
                                      <?php endif ?>
                                      <?php if ($p['status'] == "proses") : ?>
                                          <a type="button" class="btn btn-warning" href="<?=base_url('C_dewaAdmin/statusproses/').$p['id_pengaduan'] ?>">
                                              Proses
                                          </a>
                                      <?php endif ?>
                                      <?php if ($p['status'] == "selesai") : ?>
                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="">
                                              Selesai
                                          </button>
                                      <?php endif ?>


                                      <!-- status pengaduan -->
                                      <div class="modal fade" id="ngadu<?= $p['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Tindakan</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="post" action="<?= base_url('C_dewaAdmin/upload_pengaduan/') . $p['id_pengaduan'] ?>">
                                                          <fieldset disabled>
                                                              <div class="row">
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Pelapor</label>
                                                                      <input type="text" class="form-control" id="pelapor" aria-describedby="emailHelp" value="<?= $p['nama'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputPassword1">Tanggal</label>
                                                                      <input type="date" class="form-control" id="tanggal" value="<?= $p['tanggal_pengaduan'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Kategori</label>
                                                                      <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" value="<?= $p['kategori'] ?>">
                                                                  </div>
                                                                  <div class="mb-3 col-md-6">
                                                                      <label for="exampleInputEmail1">Subkategori</label>
                                                                      <input type="text" class="form-control" id="subkategori" aria-describedby="emailHelp" value="<?= $p['sub_kategori'] ?>">
                                                                  </div>
                                                              </div>
                                                              <div class="mb-3">
                                                                  <label for="exampleInputEmail1">Isi Pengaduan</label>
                                                                  <textarea type="text" class="form-control" id="subkategori" aria-describedby="emailHelp" value=""><?= $p['isi_laporan'] ?></textarea>
                                                              </div>
                                                          </fieldset>
                                                          <div class="mb-3">
                                                              <label for="exampleInputEmail1" class="form-label">Tanggapan</label>
                                                              <textarea class="form-control" name="tanggapan" id="tanggapan" placeholder="Masukan Tanggapan"></textarea>
                                                          </div>
                                                          <div>
                                                              <label for="exampleInputEmail1" class="form-label">Status</label>
                                                              <select name="status" class="form form-control mt-2" id="">
                                                                  <option selected>- Pilih -</option>
                                                                  <option value="proses">proses</option>
                                                                  <option value="selesai">selesai</option>
                                                              </select>
                                                          </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                                  </div>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
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