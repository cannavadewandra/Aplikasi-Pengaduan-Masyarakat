                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tanggapan</h1>
                    </div>


                    <div class="row">
                        <div class="col-lg mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?= base_url('C_dewaAdmin/statusproses') . $p['id_pengaduan'] ?>">
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
                                            <div class="mb-3">
                                                <p>Foto</p>
                                                <img src="<?= base_url('assets/img/uploads/') . $p['foto'] ?>" alt="" width="400px">
                                            </div>
                                        </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="d-flex align-text-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="ml-auto d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Tanggapan
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tanggapan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="<?= base_url('C_dewaAdmin/upload_pengaduan/') . $p['id_pengaduan'] ?>">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Tanggapan</label>
                                                            <textarea class="form-control" name="tanggapan" id="tanggapan" placeholder="Masukan Tanggapan"></textarea>
                                                        </div>
                                                        <div>
                                                            <label for="exampleInputEmail1" class="form-label">Status</label>
                                                            <select name="status" class="form form-control mt-2" id="">
                                                                <option selected>- Pilih -</option>
                                                                <option value="selesai">selesai</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Isi Tanggapan</th>
                                                <th>Petugas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($tanggapanproses as $tp) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $tp['tgl_tanggapan'] ?></td>
                                                    <td><?= $tp['tanggapan'] ?></td>
                                                    <td><?= $tp['nama_petugas'] ?></td>
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
                </div>