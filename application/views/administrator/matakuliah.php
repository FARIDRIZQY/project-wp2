<div class="container-fluid">
    
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Ruang Input Nilai  </div>
    
    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/matakuliah/tambah_matakuliah','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Form Input</button>') ?>
    <table class="table table-bordered table-hover table-striped">

    <tr>
        <th>NO</th>
        <th>KODE SISWA</th>
        <th>NAMA SISWA</th>
        <th colspan="4">AKSI</th>
    </tr>

    <?php
    $no =  1;
    foreach($matakuliah as $mk) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mk->kode_matakuliah ?></td>
        <td><?php echo $mk->nama_matakuliah ?></td>
        <td width="20px"><?php echo anchor('administrator/matakuliah/detail/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
        <td width="20px"><?php echo anchor('administrator/matakuliah/update/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
        <td width="20px"><?php echo anchor('administrator/matakuliah/delete/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>

    <?php endforeach; ?>
    </table>
</div>