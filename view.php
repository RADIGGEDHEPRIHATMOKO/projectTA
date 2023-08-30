<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <strong class="card-title text-white">Data Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengguna as $row) { ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $row->nama_admin;?></td>
                                    <td><?= $row->email;?></td>
                                    <td><?= $row->password;?></td>
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