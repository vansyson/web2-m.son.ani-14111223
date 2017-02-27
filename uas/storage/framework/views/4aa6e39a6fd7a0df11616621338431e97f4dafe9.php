<?php $__env->startSection('content'); ?>
	<form method="POST" action="<?php echo e(URL('/store')); ?>">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
		<table border="1" width="60%" align="center">
			<tr>
				<th><align ="center" colspan="2">Tambah data</th>
			</tr>
			<tr>
				<td bgcolor="#00FFFF"><strong>Nama</strong></td>
				<td><Input style="text" name="nama" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#00FFFF"><strong>NIM</strong></td>
				<td><input type=" text" name="nim" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#00FFFF"><strong>Alamat</strong></td>
				<td><input type=" text" name="alamat" size="80"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" value="Tambah" /></td>
			</tr>
		</table>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>