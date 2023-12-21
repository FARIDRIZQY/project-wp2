<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-eye"></i> Detail Input Nilai
    </div>

    <table class="table table-hover table-striped table-bordered">
        <?php foreach($detail as $dt) : ?>
        <tr>
            <th>Kode Siswa</th>
            <td><?php echo $dt->kode_matakuliah; ?></td>
        </tr>

        <tr>
            <th>Nama Siswa</th>
            <td><?php echo $dt->nama_matakuliah; ?></td>
        </tr>

        <tr>
            <th>Nilai</th>
            <td><?php echo $dt->sks; ?></td>
        </tr>

        <tr>
            <th>kelas</th>
            <td><?php echo $dt->semester; ?></td>
        </tr>


        <?php endforeach; ?>
    </table>

    <?php echo anchor('administrator/matakuliah','<div class="btn btn-sm btn-primary"> Kembali </div>') ?>
</div>