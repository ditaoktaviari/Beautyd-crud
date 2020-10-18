<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=produk&page=save" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <input type="hidden" name="id_produk" value="<?=(isset($_POST['id_produk']))?$_POST['id_produk']:'';?>" class="form-control">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" value="<?=(isset($_POST['nama_produk']))?$_POST['nama_produk']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['nama_produk']))?$error['nama_produk']:'';?></span>
        </div>
        <div class="form-group">
            <label for="harga_modal">Harga Modal (contoh : 10000)</label>
            <input type="text" name="harga_modal" value="<?=(isset($_POST['harga_modal']))?$_POST['harga_modal']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['harga_modal']))?$error['harga_modal']:'';?></span>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual (contoh : 10000)</label>
            <input type="text" name="harga_jual" value="<?=(isset($_POST['harga_jual']))?$_POST['harga_jual']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['harga_jual']))?$error['harga_jual']:'';?></span>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" value="<?=(isset($_POST['stok']))?$_POST['stok']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['stok']))?$error['stok']:'';?></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="berat">Berat (gram)</label>
            <input type="text" name="berat" value="<?=(isset($_POST['berat']))?$_POST['berat']:'';?>" require="" class="form-control">
            <span class="text-danger"><?=(isset($error['berat']))?$error['berat']:'';?></span>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" value="<?=(isset($_POST['keterangan']))?$_POST['keterangan']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['keterangan']))?$error['keterangan']:'';?></span>
        </div>
        <div class="form-group">
            <label for="file_gambar">File Gambar (.png dan .jpg)</label>
            <input type="file" name="file_gambar" value="<?=(isset($_POST['file_gambar']))?$_POST['file_gambar']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['file_gambar']))?$error['file_gambar']:'';?></span>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori Produk</label>
            <select name="id_kategori" class="form-control" required id="" >
                <option value="">Pilih Kategori</option>
                <?php if($kategori != NULL){
                    foreach($kategori as $row){?>
                        <option <?=(isset($_POST['id_kategori']) && $_POST['id_kategori']==$row['nama_kategori'] )?"selected":'';?> value="<?=$row['nama_kategori'];?>"> <?=$row['nama_kategori'];?></option>
                    <?php }
                }?>
            </select>
            <span class="text-danger"><?=(isset($error['id_kategori']))?$error['id_kategori']:'';?></span>
        </div>
    </div>
</form>