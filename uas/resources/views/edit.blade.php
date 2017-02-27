@extends('layouts.app')
@section('content')
	<form method="POST" action="{{ URL('/update/'.$tampil_id->id) }}">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	  <nav>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Ubah data</a></div>
                </div></div></div></div></nav>
  </nav>
		<table border="2" width="20%" align="center">
			<tr>
				<td bgcolor="#00FFFF"><strong>Nama</strong></td>
			  <td><Input style="text" name="nama" size="50" value="{{ $tampil_id->nama }}" /></td>
			</tr>
			<tr>
				<td bgcolor="#00FFFF"><strong>NIM</strong></td>
			  <td><input type=" text" name="nim" size="50" value="{{ $tampil_id->nim }}"></td>
			</tr>
			<tr>
				<td bgcolor="#00FFFF"><strong>Alamat</strong></td>
			  <td><input type=" text" name="alamat" size="50" value="{{ $tampil_id->alamat }}"></td>
			</tr>
				<td colspan="2" align="right"><input type="submit" value="Simpan" /><input type="submit" value="Batal" /></td>
			</tr>
		</table>
	</form>
@stop