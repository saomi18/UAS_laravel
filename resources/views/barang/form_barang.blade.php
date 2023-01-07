@extends('layout.form_view')
@section('title')
    Data Barang
@endsection
@section('link')
<a class="btn btn-primary" role="button" href=" {{ url('tambah_barang')}}">Tambah Barang</a>
<br>
<a class="btn btn-primary" role="button" href=" {{ url('cetakpdf')}}">Cetak PDF</a> 
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga</th>
        <th scope="col">Ket</th>
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($barangs as $barang)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$barang->nama}}</td>
    <td>{{$barang->jumlah}}</td>
    <td>{{$barang->harga}}</td>
    <td>{{$barang->ket}}</td>
    <td><a class="btn btn-warning" role="button" href="{{url('edit_barang')."/".$barang->id}}"><i class="bi bi-pencil-square"></i></a>
    <a class="btn btn-danger" role="button" href="{{url('hapus_barang')."/".$barang->id}}"><i class="bi bi-trash3"></i></a></td>
    </tr>
    @endforeach    
@endsection
