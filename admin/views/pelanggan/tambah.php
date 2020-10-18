<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=pelanggan&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <input type="hidden" name="id_pelanggan" value="<?=(isset($_POST['id_pelanggan']))?$_POST['id_pelanggan']:'';?>" class="form-control">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" value="<?=(isset($_POST['nama_pelanggan']))?$_POST['nama_pelanggan']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['nama_pelanggan']))?$error['nama_pelanggan']:'';?></span>
        </div>
        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" name="telp" value="<?=(isset($_POST['telp']))?$_POST['telp']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['telp']))?$error['telp']:'';?></span>
        </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?=(isset($_POST['email']))?$_POST['email']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['email']))?$error['email']:'';?></span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?=(isset($_POST['password']))?$_POST['password']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['password']))?$error['password']:'';?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['alamat']))?$error['alamat']:'';?></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>