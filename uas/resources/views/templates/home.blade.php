@extends ('templates.index')
@section ('content')
  <nav>
    <ul>
      <li><b>MENU</b></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="/tambah">TAMBAH</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </nav>
  <article>
    <table width="50%" height="0" border="1" align="center">
                <thead>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Alamat</th>
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