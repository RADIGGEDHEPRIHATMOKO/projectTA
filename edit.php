<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Form Edit Pengguna</strong>
                    </div>
                    <div class="card-body">

                        <form method="post" action="<?= base_url()?>administrator/Pengguna/update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_admin" value="<?= $pengguna['nama_admin'];?>" class="form-control" placeholder="Masukkan nama" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $pengguna['email'];?>" class="form-control" placeholder="Masukkan Email" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?= $pengguna['password'];?>" class="form-control" placeholder="Masukkan Password" required>
                            </div>

                            <div class="form-group">
                                <label>Upload foto</label>
                                <input type="file" name="poto" class="form-control" placeholder="Upload foto">
                                <?php 
                                if(!empty($pengguna['poto'])){ ?>
                                <img src="<?= base_url()?>assets/images/pengguna/<?= $pengguna['poto'];?>" alt="">
                                <?php }else { ?>
                                    <small class="text-danger"> Poto Tidak Tersedia </small>
                                    <?php 

                                }

                                ?>
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