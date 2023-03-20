                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kategori </h1>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-text-center">
                                <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>

                                <?php if ($user['level'] == 'admin') {?>

                                <!-- Button trigger modal -->
                                <button type="button" class="ml-auto d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#kategori">
                                    Tambah Kategori
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="kategori">Tambah Kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= base_url('C_dewaAdmin/tambah_kategori') ?>">
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <input type="text" class="form-control" id="kategori" name="kategori" aria-describedby="emailHelp">
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
                                <?php }?>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>

                                            <?php if ($user['level'] == 'admin') {?>
                                            <th>Aksi</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($kategori as $kt) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $kt['kategori'] ?></td>

                                                <?php if ($user['level'] == 'admin') {?>
                                                <td>
                                                    <!-- Button Edit -->
                                                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#edit<?= $kt['id'] ?>"><i class="fa fa-edit"></i></button>

                                                    <!-- Modal -->

                                                    <div class="modal fade" id="edit<?= $kt['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Kategori</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('C_dewaAdmin/editkategori/' . $kt['id']) ?>">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                                                            <input type="text" name='kategori' value='<?= $kt['kategori'] ?>' class="form-control" id="kategori" aria-describedby="emailHelp">
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="<?= base_url('C_dewaAdmin/deletekategori/') . $kt['id'] ?>">
                                                        <button class="btn btn-danger btn-sm" type='submit' onclick="return confirm('Kau Ni Betulan Atau Tak??')"><i class="fa fa-trash"></i></button>
                                                    </a>
                                                </td>
                                                <?php }?>
                                            </tr>
                                            


                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <br>




                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Subkategori </h1>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-text-center">
                                <h6 class="m-0 font-weight-bold text-primary">Subategori</h6>

                                <!-- Button trigger modal -->
                                <button type="button" class="ml-auto d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#subkategori">
                                    Tambah Subkategori
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="subkategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Subkategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <form action="<?= base_url('C_dewaAdmin/tambah_subkategori') ?>" method="post">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label">Pilih Kategori</label>
                                                            <select class="form-select form-control" aria-label="Default select example" name="kategori" id="kategori">
                                                                <?php foreach ($kategori as $kt) : ?>
                                                                    <option value=" <?= $kt['id'] ?>">
                                                                        <?= $kt['kategori'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Subkategori</label>
                                                            <input type="text" class="form-control" name="subkategori" id="subkategori" aria-describedby="emailHelp">
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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabel" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Subkategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($subkategori as $sk) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $sk['kategori'] ?></td>
                                                    <td><?= $sk['sub_kategori'] ?></td>
                                                    <td>


                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#editsub<?= $sk['id_subkategori'] ?>"><i class="fa fa-edit"></i></button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editsub<?= $sk['id_subkategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editsub<?= $sk['id_subkategori'] ?>">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="<?= base_url('C_dewaAdmin/editsubkategori/' . $sk['id_subkategori']) ?>">

                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Subkategori</label>
                                                                                <input type="text" class="form-control" id="subkategori" name="subkategori" value="<?= $sk['sub_kategori'] ?>">
                                                                            </div>


                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="<?= base_url('C_dewaAdmin/deletesubkategori/') . $sk['id_subkategori'] ?>">
                                                            <button class="btn btn-danger btn-sm" type='submit' onclick="return confirm('Yang Bener Ente?')"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach; ?>
                                        </tbody>

                                    </tfoot>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                </div>

                <!-- End of Main Content -->