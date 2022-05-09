<?php include "sidebar.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data Admin </h3>
            <a href="create.php" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Admin</th>
                        <th>username</th>
                        <th>password</th>
                        <th>Jenis Kelamin</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT *FROM admin');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_admin']?></td>
                        <td><?= $data['username']?></td>
                        <td><?= $data['password']?></td>
                        <td><?= $data['jk_admin']?></td>
                        <td><?= $data['no_telp']?></td>
                        <td><?= $data['alamat_admin']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?page=admin_edit&id_admin=<?= $data['id_admin']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?page=admin_delete&id_admin=<?= $data['id_admin']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>