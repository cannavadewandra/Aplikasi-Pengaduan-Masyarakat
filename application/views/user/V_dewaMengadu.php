<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4" style="text-transform:uppercase">Input Pengaduan</h1>
                <br>
                <form method="post" action="<?= base_url('C_dewaUser/tambahmengadu') ?>" enctype="multipart/form-data">
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik" placeholder="<?= $user['nik']?>">
                    </div>
                </fieldset>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Kategori</label>
                        <select class="form-select form-control" aria-label="Default select example" name="kategori" id="kategori">
                            <option selected>- Pilih Kategori -</option>
                            <?php foreach ($kategori as $kt) : ?>
                                <option value=" <?= $kt['id'] ?>">
                                    <?= $kt['kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Subkategori</label>
                        <select class="form-select form-control" aria-label="Default select example" name="subkategori" id="subkategori">
                            <option selected>- Pilih Subkategori -</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Isi Laporan Pengaduan</label>
                        <textarea class="form-control" name="laporan" id="laporan" placeholder="Masukan Laporan"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" class="form form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </main>
    </div>
</div>
</div>