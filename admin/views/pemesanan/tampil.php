<div class="row">
    <div class="pull-left">
        <h4>Daftar Pesanan</h4>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>ID</td>
                <td>tanggal</td>
                <td>Status</td>
                <td>Telp</td>
                <td>Alamat</td>
                <td>Ongkir</td>
                <td>ID Keranjang</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($pemesanan != NULL){
                $no = 1;
                foreach($pemesanan as $row){?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$row['id_pemesanan'];?></td>
                        <td><?=$row['tgl'];?></td>
                        <td><?=$row['status'];?></td>
                        <td><?=$row['telp'];?></td>
                        <td><?=$row['alamat'];?></td>
                        <td><?=$row['biaya'];?></td>
                        <td><?=$row['id_keranjang'];?></td>
                        <td><?=$row['harga'];?></td>
                        <td>
                            <a href="index.php?mod=pemesanan&page=delete&id=<?=md5($row['id_pemesanan'])?>" onclick="return confirm('Anda yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++;}
            }?>
        </tbody>
    </table>
</div>