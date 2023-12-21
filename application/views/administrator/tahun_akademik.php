<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Tahun Akademik
    </div>
    
    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/tahun_akademik/tambah_tahun_akademik','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Form Tahun Akademik</button>') ?>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA SISWA</th>
            <th>TAHUN AKADEMIK</th>
            <th>SEMESTER</th>
            <th>STATUS</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach($tahun_akademik as $ak) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ak->nama_siswa ?></td>
            <td><?php echo $ak->tahun_akademik ?></td>
            <td><?php echo $ak->semester ?></td>
            <td><?php echo $ak->status ?></td>
            <td width="20px"><?php echo anchor('administrator/tahun_akademik/update/'.$ak->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/tahun_akademik/delete/'.$ak->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>