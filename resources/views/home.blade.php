@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center> <h3>Selamat Datang di Sistem Pengelolaan Keuangan</h3> </center><br>

                    <h5>Halaman Utama<h5>
                    <h6>Selamat Datang {{ ucfirst(Auth()->user()->name) }}<h6> <br>

                    <div align="center">
                        <div>
                            <div class="card-main">
                                <img src="{{ asset('image/masuk.jpg') }}" alt="Avatar" class="image">
                                <div class="overlay  overlayLeft">
                                    <div class="text"><b><i>Pemasukan</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. {{number_format ($laporan_pemasukan,0)}} </i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <img src="{{ asset('image/keluar.jpg') }}" alt="Avatar" class="image">
                                <div class="overlay overlayRight">
                                    <div class="text"><b><i>Pengeluaran</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. {{number_format ($laporan_pengeluaran,0)}} </i> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <img src="{{ asset('image/total.jpg') }}" alt="Avatar" class="image">
                                <div class="overlay overlayFade">
                                    <div class="text"><b><i>Sisa</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. {{number_format ($total_akhir,0)}} </i> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

