@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">

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
        <form method="get" action="{{ url('cari-laporan') }}">
            <div class="form-group">
                @csrf

            <div class="form-group">
                <label for="dari">Dari Tanggal :</label>
                <input type="date" id="dari" name="dari" value=" " class="form-control"/>
            </div>
            <div class="form-group">
                <label for="sampai">Sampai Tanggal :</label>
                <input type="date" id="sampai" name="sampai" value=" " class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Cari Data</button>
        </form>

        @if(isset($pemasukan))

        <div class="row">
            <div class="col-md-12">

                <div class="card-header border-0">
                    <h3 class="mb-0"> Data Pemasukan </h3>
                    <button type="submit" class="btn btn-primary">Export to Excel</button>
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Hari</td>
                            <td>Tanggal</td>
                            <td>Nominal</td>
                            <td>Kategori</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemasukan as $e=>$ps)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ date('d M Y', strtotime($ps -> tanggal))}}</td>
                            <td>Rp. {{number_format ($ps -> nominal,0) }}</td>
                            <td>{{ $ps -> kategori}}</td>
                            <td>{{ $ps -> keterangan}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td> Total Pemasukan</td>
                            <td><b><i> Rp. {{number_format ($total_pemasukan,0)}}</i></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @endif

        @if(isset($pengeluaran))

        <div class="row">
            <div class="col-md-12">

                <div class="card-header border-0">
                    <h3 class="mb-0"> Data Pengeluaran </h3>
                    <button type="submit" class="btn btn-primary">Export to Excel</button>
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Hari</td>
                            <td>Tanggal</td>
                            <td>Nominal</td>
                            <td>Kategori</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengeluaran as $e=>$pn)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ date('d M Y', strtotime($pn -> tanggal))}}</td>
                            <td>Rp. {{number_format ($pn -> nominal,0) }}</td>
                            <td>{{ $pn -> kategori2}}</td>
                            <td>{{ $pn -> keterangan}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td> Total Pengeluaran</td>
                            <td><b><i> Rp. {{number_format ($total_pengeluaran,0)}}</i></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @endif

    </div>
</div>
@endsection