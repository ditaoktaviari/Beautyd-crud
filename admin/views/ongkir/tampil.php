<div class="row">
    <div class="pull-left">
        <h4>Daftar Ongkir</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=ongkir&page=add">
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
                <td>Nama Tujuan</td>
                <td>Biaya</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($ongkir != NULL){
                $no = 1;
                foreach($ongkir as $row){?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$row['id_ongkir'];?></td>
                        <td><?=$row['nama_tujuan'];?></td>
                        <td><?=$row['biaya'];?></td>
                        <td>
                            <a href="index.php?mod=ongkir&page=edit&id=<?=md5($row['id_ongkir'])?>"><i class="fa fa-pencil"></i></a>
                            <a href="index.php?mod=ongkir&page=delete&id=<?=md5($row['id_ongkir'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++;}
            }?>
        </tbody>
    </table>
</div>