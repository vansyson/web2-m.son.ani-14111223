@extends('layouts.app')
@section ('content')
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
                @foreach($mhsw as $mhs)
                <tr>
                  <td>{{$mhs->nama}}</td>
                  <td>{{$mhs->nim}}</td>
                  <td>{{$mhs->alamat}}</td>
                  <td><div class="btn-group">
                        <a href="{{URL::to('/show/'.$mhs->id)}}" class="btn btn-primary">UBAH</a>
                        <a href="{{URL::to('/destroy/'.$mhs->id)}}" class="btn btn-primary">HAPUS</a>
                        </div></td>
                </tr>
                @endforeach               
</table>
@stop