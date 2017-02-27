<?php $__env->startSection('content'); ?>
  <nav>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><a href="/tambah">TAMBAH DATA</a></div>
                </div></div></div></div></nav>
  </nav>
  <article>
    <table width="55%" height="0" border="1" align="center">
                <thead>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </thead>
                <?php foreach($mhsw as $mhs): ?>
                <tr>
                  <td><?php echo e($mhs->nama); ?></td>
                  <td><?php echo e($mhs->nim); ?></td>
                  <td><?php echo e($mhs->alamat); ?></td>
                  <td><div class="btn-group">
                        <a href="<?php echo e(URL::to('/show/'.$mhs->id)); ?>" class="btn btn-primary">UBAH</a>
                        <a href="<?php echo e(URL::to('/destroy/'.$mhs->id)); ?>" class="btn btn-primary">HAPUS</a>
                        </div></td>
                </tr>
                <?php endforeach; ?>               
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>