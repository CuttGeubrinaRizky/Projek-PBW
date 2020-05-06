@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data Pemasukan Anda
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
      <form method="post" action="{{ route('pemasukan.update', $datamasuk->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="hari">Hari:</label>
              <?php 
                $options = array ("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
              ?>
              <select name="hari" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datamasuk['hari'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value="{{ $datamasuk->tanggal }}" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal" value="{{ $datamasuk->nominal }}"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori Pemasukan :</label>
              <?php 
                $options = array ("Bonus","Deposito","Dividen","Gaji","Hasil Usaha","Hibah","Investasi","Kupon","Pengembalian Dana",
                "Pengharagaan","Penyewaan","Pinjaman","Tabungan","Lain-lain");
              ?>
              <select name="kategori" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datamasuk['kategori'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan" value="{{ $datamasuk->keterangan }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection