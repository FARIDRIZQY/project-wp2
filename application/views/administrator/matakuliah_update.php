<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Edit Datail Nilai
    </div>

    <?php foreach($matakuliah as $mk) : ?>
        <form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi'); ?>">

        <div class="form-group">
            <label> NAMA SISWA</label>
            <input type="hidden" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah ?>">
            <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah ?>">
        </div>

    <div class="form-group">
            <label> NILAI</label>
           <select name="sks" class="form_control">
            <option><?php echo $mk->sks ?></option>
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
            <option>60</option>
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
            <label> KELAS</label>
           <select name="semester" class="form_control">
            <option><?php echo $mk->semester ?></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
           </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    <?php endforeach; ?>
        </form>
</div>