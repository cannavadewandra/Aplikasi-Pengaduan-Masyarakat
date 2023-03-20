<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>

    </div>

    <div>
        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Account</h6>
                </div>
                <div class="card-body">

                    <table class="table">

                        <tr>
                            <td>
                                <h6>Nama</h6>
                            </td>
                            <td>
                                <h6>: <?= $user['nama'] ?></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Username</h6>
                            </td>
                            <td>
                                <h6>: <?= $user['username'] ?></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>NIK</h6>
                            </td>
                            <td>
                                <h6>: <?= $user['nik'] ?></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Nomor Telepon</h6>
                            </td>
                            <td>
                                <h6>: <?= $user['telepon'] ?></h6>
                            </td>
                        </tr>


                        <td>
                            <br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Edit Profile
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?=base_url('C_dewaUser/editprofile')?>">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="exampleInputEmail1">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$user['nama']?>">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="exampleInputPassword1">NIK</label>
                                                    <input type="text" class="form-control" id="nik" name="nik" value="<?=$user['nik']?>">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="exampleInputEmail1">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username" value="<?=$user['username']?>">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="exampleInputEmail1">Nomor telepon</label>
                                                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?=$user['telepon']?>">
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
                        <td> </td>

                    </table>

                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->