@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  thead{
    background-color:#8b9ca9;
  }
  
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="col-lg-2">
    <a href="{{ route('pengeluaran.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Hari</td>
          <td>Tanggal</td>
          <td>Nominal</td>
          <td>Kategori</td>
          <td>Keterangan</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datakeluar as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->hari}}</td>
            <td>{{$data->tanggal}}</td>
            <td>Rp. {{number_format($data->nominal,0)}}</td>
            <td>{{$data->kategori2}}</td>
            <td>{{$data->keterangan}}</td>
            <td><a href="{{ route('pengeluaran.edit', $data->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('pengeluaran.destroy', $data->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
