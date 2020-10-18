<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=ongkir&page=save" method="POST">
    <div class="col-md-12">
        <div class="form-group">
            <input type="hidden" name="id_ongkir" value="<?=(isset($_POST['id_ongkir']))?$_POST['id_ongkir']:'';?>" class="form-control">
            <label for="nama_kategori">Nama Tujuan</label>
            <input type="text" name="nama_tujuan" value="<?=(isset($_POST['nama_tujuan']))?$_POST['nama_tujuan']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['nama_tujuan']))?$error['nama_tujuan']:'';?></span>
        </div>
        <div class="form-group">
            <label for="biaya">Biaya (contoh : 10000)</label>
            <input type="text" name="biaya" value="<?=(isset($_POST['biaya']))?$_POST['biaya']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['biaya']))?$error['biaya']:'';?></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>