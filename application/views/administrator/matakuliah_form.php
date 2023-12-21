<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Nilai
    </div>

    <form method="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>">

    <div class="form-group">
        <label>Kode Siswa</label>
        <input type="text" name="kode_matakuliah" class="form-control">
        <?php echo form_error('kode_matakuliah','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama_matakuliah" class="form-control">
        <?php echo form_error('nama_matakuliah','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>NILAI</label>
        <select name="sks" class="form-control">
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
            <option>60</option>
            <option>70</option>
            <option>80</option>
            <option>90</option>
            <option>100</option>
        </select>
    </div>

    <div class="form-group">
        <label>KELAS</label>
        <select name="semester" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
    </div>

            <?php foreach($prodi as $prd) : ?>

            <?php endforeach;  ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Simpan</button>

    </form>
</div>