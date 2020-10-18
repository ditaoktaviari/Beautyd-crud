<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=pegawai&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <input type="hidden" name="id_pegawai" value="<?=(isset($_POST['id_pegawai']))?$_POST['id_pegawai']:'';?>" class="form-control">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" name="nama_pegawai" value="<?=(isset($_POST['nama_pegawai']))?$_POST['nama_pegawai']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['nama_pegawai']))?$error['nama_pegawai']:'';?></span>
        </div>
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
    <div class="col-md-6">
        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" name="telp" value="<?=(isset($_POST['telp']))?$_POST['telp']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['telp']))?$error['telp']:'';?></span>
        </div>
        <div class="form-group">
            <label for="telp">Jabatan</label>
            <input type="text" name="jabatan" value="<?=(isset($_POST['jabatan']))?$_POST['jabatan']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['jabatan']))?$error['jabatan']:'';?></span>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" require class="form-control">
            <span class="text-danger"><?=(isset($error['alamat']))?$error['alamat']:'';?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>