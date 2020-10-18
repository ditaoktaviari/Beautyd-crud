<div class="row">
    <div class="pull-left">
        <h4>Daftar Pelanggan</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=pelanggan&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Telp</td>
                <td>Alamat</td>
                <td>Password</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($pelanggan != NULL){
                $no = 1;
                foreach($pelanggan as $row){?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$row['id_pelanggan'];?></td>
                        <td><?=$row['nama_pelanggan'];?></td>
                        <td><?=$row['email'];?></td>
                        <td><?=$row['telp'];?></td>
                        <td><?=$row['alamat'];?></td>
                        <td><?=$row['password'];?></td>
                        <td>
                            <a href="index.php?mod=pelanggan&page=edit&id=<?=md5($row['id_pelanggan'])?>"><i class="fa fa-pencil"></i></a>
                            <a href="index.php?mod=pelanggan&page=delete&id=<?=md5($row['id_pelanggan'])?>" onclick="return confirm('Anda yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++;}
            }?>
        </tbody>
    </table>
</div>