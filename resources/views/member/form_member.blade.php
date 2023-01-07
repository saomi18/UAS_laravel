@extends('layout.form_view')
@section('title')
    Data Member
@endsection
@section('link')
<a class="btn btn-primary" role="button" href=" {{ url('tambah_member')}}">Tambah Member</a>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Level</th>
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($members as $member)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$member->nama}}</td>
    <td>{{$member->level}}</td>
    <td><a class="btn btn-warning" role="button" href="{{url('edit_member')."/".$member->id}}"><i class="bi bi-pencil-square"></i></a>
    <a class="btn btn-danger" role="button" href="{{url('hapus_member')."/".$member->id}}"><i class="bi bi-trash3"></i></a></td>
    </tr>
    @endforeach    
@endsection
