  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Petugas </h1>
      </div>


      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <div class="d-flex align-text-center">
                  <h6 class="m-0 font-weight-bold text-primary ">Data Petugas</h6>

                  <?php if ($user['level'] == 'admin') { ?>
                      <!-- Button trigger modal -->
                      <button type="button" class="ml-auto d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#petugas">
                          Tambah Petugas
                      </button>
                  <?php } ?>

                  <!-- Modal -->
                  <div class="modal fade" id="petugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <div class="modal-body">
                                      <form action="<?= base_url('C_dewaAuth/registrasi_petugas') ?>" method="post">

                                          <div class="">
                                              <div>
                                              </div>
                                              <form class="user" method="post" action="">
                                                  <div class="form-group">
                                                      <input type="text" class="form-control form-control-user" id="nama_petugas" name="nama_petugas" placeholder="Nama">
                                                      <?= form_error('nama_petugas', '<small class="text-danger pl-3">', '</small>') ?>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="number" class="form-control form-control-user" id="telp" name="telp" placeholder="telp">
                                                      <?= form_error('telp', '<small class="text-danger pl-3">', '</small>') ?>
                                                  </div>
                                                  <div class="form-group row">
                                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                                          <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password">
                                                          <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Repeat Password">
                                                          <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                                      </div>
                                                  </div>
                                                  <select class="form-select form-control" aria-label="Default select example" name="level" id="level">
                                                      <option selected>Pilih Role</option>
                                                      <option value="1">Admin</option>
                                                      <option value="2">Petugas</option>
                                                  </select>
                                                  <br>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                              <button type="submit" class="btn btn-primary">Kirim</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <?= $this->session->flashdata('message') ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Petugas</th>
                              <th>No telepon</th>
                              <th>Role</th>
                              <td>Status</td>
                              <?php if ($user['level'] == 'admin') { ?>
                                  <th>Aksi</th>
                              <?php } ?>
                              
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1;
                            foreach ($petugas as $p) : ?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $p['nama_petugas'] ?></td>
                                  <td><?= $p['telp'] ?></td>
                                  <td><?= $p['level'] ?></td>
                                  <td><?= $p['active'] ?></td>

                                  <?php if ($user['level'] == 'admin') { ?>
                                  <td>
                                          <!-- Button Edit -->
                                          <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#editpetugas<?= $p['id_petugas'] ?>"><i class="fa fa-edit"></i></button>

                                          <!-- Modal -->

                                          <div class="modal fade" id="editpetugas<?= $p['id_petugas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <form class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title">Edit Petugas</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <form method="post" action="<?= base_url('C_dewaAdmin/editpetugas/') . $p['id_petugas'] ?>">
                                                              <div class="form-group">
                                                                  <label for="exampleInputEmail1">Nama</label>
                                                                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" aria-describedby="emailHelp" value="<?= $p['nama_petugas'] ?>">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="exampleInputEmail1">Username</label>
                                                                  <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?= $p['username'] ?>">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="exampleInputEmail1">Nomor Telepon</label>
                                                                  <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" value="<?= $p['telp'] ?>">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="exampleFormControlSelect1">Level</label>
                                                                  <select class="form-control" id="level" name="level">
                                                                      <option>- Pilih -</option>
                                                                      <option>Admin</option>
                                                                      <option>Petugas</option>
                                                                  </select>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                                              </div>
                                                          </form>
                                                      </div>  
                                                 </form>                                                
                                        
                                          </div>
                                           </div>
                                      </div>

                                      <?php if ($p['active'] == 'suspend') {?>
                                        <a href="<?= base_url('C_dewaAdmin/unsuspendpetugas/' . $p['id_petugas']) ?>">
                                         <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin unsuspend akun?')"><i class="fas fa-unlock"></i>
                                         </button>
                                      </a>
                                      
                                      <?php } else{ ?>
                                        
                                        <a href="<?= base_url('C_dewaAdmin/suspendpetugas/' . $p['id_petugas']) ?>">
                                         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin suspend akun?')"><i class="fas fa-lock"></i>
                                         </button>
                                      </a>
 
                                     <?php } ?> 
                                     <?php }?>

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