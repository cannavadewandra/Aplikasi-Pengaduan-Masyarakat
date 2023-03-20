  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Masyarakat </h1>
      </div>


      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <div class="d-flex align-text-center">
                  <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
              </div>
          </div>
          <div class="card-body">
          <?= $this->session->flashdata('message') ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>NIK</th>
                              <th>No telepon</th>
                              <th>Status</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1;
                            foreach ($masyarakat as $ms) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $ms['nama'] ?></td>
                                  <td><?= $ms['nik'] ?></td>
                                  <td><?= $ms['telepon'] ?></td>
                                  <td><?= $ms['active'] ?></td>

                                  <td>
                                  <?php if ($ms['active'] == 'suspend') {?>
                                        <a href="<?= base_url('C_dewaAdmin/unsuspendmasyarakat/' . $ms['id']) ?>">
                                         <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin unsuspend akun?')"><i class="fas fa-unlock"></i>
                                         </button>
                                      </a>
                                      
                                      <?php } else{ ?>
                                        
                                        <a href="<?= base_url('C_dewaAdmin/suspendmasyarakat/' . $ms['id']) ?>">
                                         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin suspend akun?')"><i class="fas fa-lock"></i>
                                         </button>
                                      </a>

                                  <?php } ?> 
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
