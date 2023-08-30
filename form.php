<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Tambah Pengguna</strong>
                    </div>
                    <div class="card-body">

                        <form>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_admin" class="form-control" placeholder="Masukkan nama">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Masukkan Password">
                            </div>

                            <div class="form-group">
                                <label>Upload foto</label>
                                <input type="file" name="poto" class="form-control" placeholder="Upload foto">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url()?>administrator/Pengguna" class="btn btn-dark">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>