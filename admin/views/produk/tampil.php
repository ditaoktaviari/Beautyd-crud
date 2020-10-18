<div class="row">
    <div class="pull-left">
        <h4>Daftar Produk</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=produk&page=add">
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
                <td>Nama Produk</td>
                <td>Harga Modal</td>
                <td>Harga Jual</td>
                <td>Stok</td>
                <td>Berat</td>
                <td>Keterangan</td>
                <td>File Gambar</td>
                <td>Kategori</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($produk != NULL){
                $no = 1;
                foreach($produk as $row){?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$row['id_produk'];?></td>
                        <td><?=$row['nama_produk'];?></td>
                        <td>Rp <?=$row['harga_modal'];?></td>
                        <td>Rp <?=$row['harga_jual'];?></td>
                        <td><?=$row['stok'];?></td>
                        <td><?=$row['berat'];?></td>
                        <td><?=$row['keterangan'];?></td>
                        <td><img src="../../media/<?=$row['file_gambar'];?>" width='50' height='50'></td>
                        <td><?=$row['nama_kategori'];?></td>
                        <td>
                            <a href="index.php?mod=produk&page=edit&id=<?=md5($row['id_produk'])?>"><i class="fa fa-pencil"></i></a>
                            <a href="index.php?mod=produk&page=delete&id=<?=md5($row['id_produk'])?>" onclick="return confirm('Anda yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++;}
            }?>
        </tbody>
    </table>
</div>