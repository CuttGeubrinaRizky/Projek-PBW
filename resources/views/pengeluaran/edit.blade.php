@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data Pengeluaran Anda
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
      <form method="post" action="{{ route('pengeluaran.update', $datakeluar->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="hari">Hari:</label>
              <?php 
                $options = array ("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
              ?>
              <select name="hari" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datakeluar['hari'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value="{{ $datakeluar->tanggal }}" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal" value="{{ $datakeluar->nominal }}"/>
          </div>
          <div class="form-group">
              <label for="kategori2">Kategori Pengeluaran :</label>
              <?php 
                $options = array ("Asuransi","Belanja","Elektronik","Hadiah","Hewan Peliharaan","Hiburan","Kantor","Kecantikan","Kesehatan","Makanan",
                "Minuman","Kendaraan Umum","Olahraga","Pajak","Pakaian","Pendidikan","Pulsa","Rumah","Sosial","Tagihan","Transportasi","Lain-lain");
              ?>
              <select name="kategori2" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datakeluar['kategori2'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan" value="{{ $datakeluar->keterangan }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection