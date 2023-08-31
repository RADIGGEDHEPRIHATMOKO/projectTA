<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

                <a href="<?= base_url()?>administrator/Pengguna/form_pengguna" class="btn btn-dark mb-3"> <i class="fa fa-user-plus"></i> Tambah Pengguna</a>
                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Data Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Poto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengguna as $row) { ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td>
                                        <img src="<?= base_url()?>assets/images/pengguna/<?= $row->poto;?>" alt="" width="80">
                                    </td>
                                    <td><?= $row->nama_admin;?></td>
                                    <td><?= $row->email;?></td>
                                    <td><?= $row->password;?></td>
                                    <td>
                                        <a href="" class= "btn btn-success btn-sm">Edit</a>
                                        <a href="" class= "btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php }
                                ?>
                                </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

        <?php 
        if ($this->session->flashdata('info')){ ?>
            Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= ($this->session->flashdata('info'));?>'
        })

        <?php }
        ?>
    </script>