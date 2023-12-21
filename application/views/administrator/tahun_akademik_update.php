<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-edit"></i> Form Update Tahun Akademik
    </div>

    <?php foreach($tahun_akademik as $ta) : ?>

    <form method="post" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">

        <div class="form-group">
            <label> Nama Siswa</label>
            <input type="hidden" name="id" placeholder="Masukkan Nama Siswa" class="form-control" value="<?php echo $ta->id ?>">
            <input type="text" name="nama_siswa" class="form-control" value="<?php echo $ta->nama_siswa ?>">
            <?php echo form_error('nama_siswa','<div class="text-danger  small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label> Tahun Akademik</label>
            <input type="text" name="tahun_akademik" class="form-control" value="<?php echo $ta->tahun_akademik ?>">
            <?php echo form_error('tahun_akademik','<div class="text-danger  small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label> Semester</label>
            <select name="semester" class="form-control">
                <option><?php echo $ta->semester ?></option>
                <option >Ganjil</option>
                <option >Ganap</option>
            </select>
            <?php echo form_error('semester','<div class="text-danger  small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label> Status</label>
            <select name="status" class="form-control">
                <option><?php echo $ta->status ?></option>
                <option >Aktif</option>
                <option >Tidak Aktif</option>
            </select>
            <?php echo form_error('status','<div class="text-danger  small" ml-3>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <?php endforeach; ?>
</div>