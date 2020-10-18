<div class="row">
    <div class="pull-left">
        <h4>Daftar Keranjang Pelanggan</h4>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>ID</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Tanggal</td>
                <td>Nama Produk</td>
                <td>Nama Pelanggan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($keranjang != NULL){
                $no = 1;
                foreach($keranjang as $row){?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$row['id_keranjang'];?></td>
                        <td><?=$row['harga'];?></td>
                        <td><?=$row['jumlah'];?></td>
                        <td><?=$row['tgl'];?></td>
                        <td><?=$row['nama_produk'];?></td>
                        <td><?=$row['nama_pelanggan'];?></td>
                        <td>
                            <a href="index.php?mod=keranjang&page=delete&id=<?=md5($row['id_keranjang'])?>" onclick="return confirm('Anda yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++;}
            }?>
        </tbody>
    </table>
</div>