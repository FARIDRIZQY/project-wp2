<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Siswa
    </div>

    <?php echo form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>

    <div class="form-group">
        <label>KODE SISWA</label>
        <input type="text" name="nim" class="form-control">
        <?php echo form_error('nim','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>NAMA LENGKAP</label>
        <input type="text" name="nama_lengkap" class="form-control">
        <?php echo form_error('nama_lengkap','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>ALAMAT</label>
        <input type="text" name="alamat" class="form-control">
        <?php echo form_error('alamat','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>EMAIL</label>
        <input type="text" name="email" class="form-control">
        <?php echo form_error('email','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>TELEPON</label>
        <input type="text" name="telepon" class="form-control">
        <?php echo form_error('telepon','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>TEMPAT LAHIR</label>
        <input type="text" name="tempat_lahir" class="form-control">
        <?php echo form_error('tempat_lahir','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>TANGGAL LAHIR</label>
        <input type="date" name="tanggal_lahir" class="form-control">
        <?php echo form_error('tanggal_lahir','<div class="text-danger" small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>JENIS KELAMIN</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        <?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Foto</label><br>
        <input type="file" name="photo">
    </div>

    <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
    
    <?php form_close(); ?>
</div>