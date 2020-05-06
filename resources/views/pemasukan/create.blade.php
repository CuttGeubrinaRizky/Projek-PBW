@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Data Pemasukan Anda
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pemasukan.store') }}">
          <div class="form-group">
              @csrf
              <label for="hari">Hari:</label>
              <select name="hari" id="hari" class="form-control">
                <option value="">Pilih Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value=" " class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori Pemasukan :</label>
              <select name="kategori" id="kategori" class="form-control">
                <option value="">Pilih Kategori Pemasukan</option>
                <option value="Bonus">Bonus</option>
                <option value="Deposito">Deposito</option>
                <option value="Dividen">Dividen</option>
                <option value="Gaji">Gaji</option>
                <option value="Hasil Usaha">Hasil Usaha</option>
                <option value="Hibah">Hibah</option>
                <option value="Investasi">Investasi</option>
                <option value="Kupon">Kupon</option>
                <option value="Pengembalian Dana">Pengembalian Dana</option>
                <option value="Pengharagaan">Penghargaan</option>
                <option value="Penyewaan">Penyewaan</option>
                <option value="Pinjaman">Pinjaman</option>
                <option value="Tabungan">Tabungan</option>
                <option value="Lain-lain">Lain-lain</option>
              </select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection