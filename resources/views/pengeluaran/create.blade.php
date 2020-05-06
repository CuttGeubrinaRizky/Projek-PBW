@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Data Pengeluaran Anda
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
      <form method="post" action="{{ route('pengeluaran.store') }}">
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
            <label for="kategori2">Kategori Pengeluaran :</label>
              <select name="kategori2" id="kategori2" class="form-control">
                <option value="">Pilih Kategori Pengeluaran</option>
                <option value="Asuransi">Asuransi</option>
                <option value="Belanja">Belanja</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Hadiah">Hadiah</option>
                <option value="Hewan Peliharaan">Hewan Peliharaan</option>
                <option value="Hiburan">Hiburan</option>
                <option value="Kantor">Kantor</option>
                <option value="Kecantikan">Kecantikan</option>
                <option value="Kesehatan">Kesehatan</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Kendaraan Umum">Kendaraan Umum</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Pajak">Pajak</option>
                <option value="Pakaian">Pakaian</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Pulsa">Pulsa</option>
                <option value="Rumah">Rumah</option>
                <option value="Sosial">Sosial</option>
                <option value="Tagihan">Tagihan</option>
                <option value="Transportasi">Transportasi</option>
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