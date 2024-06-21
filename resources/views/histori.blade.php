@extends('master')
@section('isi')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Lowongan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/lowongan"><i class="feather icon-file-text"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Manajemen</a></li>
                            <li class="breadcrumb-item"><a href="#!">Histori</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        {{-- isi --}}
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="m-b-10">Uang Yang Belum Di Ambil</h5>
                        <h1 class="m-b-10 saldo">Rp. 76.530.000</h1>
                        <button type="submit" class="btn btn-sm  btn-danger">Riwayan Pengambilan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="m-b-10">Pemberitahuan</h5>
                        <div class="pemberitahuan">
                            <p style="font-weight: bold; font-size: 15px; margin-bottom: 5px;">Mengecat Kapal</p>
                            <p style="margin-bottom: 5px">(12 Mei 2025) Untuk minggu depan kita akan merenovasi kapal(mengecat ulang, memperbaiki keretakan kapal, dan mengecek kondisi mesin)</p>
                        </div>
                        <a href="#" class="lihatSelengkapnya">Lihat Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Rekap Tangkapan & Penjualan</h3>
                <div class="line" style="width: 5%;"></div>
                <div class="table-responsive">
                    <table class="table">
                        <tr class="tab-head">
                            <th>Tanggal</th>
                            <th>Jenis Ikan</th>
                            <th>Total Berat</th>
                            <th>Harga/kg</th>
                            <th>Total Penjualan</th>
                            <th>Hasil/Orang</th>
                            <th>Catatan</th>
                            @if(Auth::user()->role === 'boss')
                                <th>Aksi</th>
                            @endif
                        </tr>
                        {{-- isi tabel  --}}
                        @foreach ($tangkapan as $tkp)
                            <tr>
                                <td>{{ $tkp->tanggal }}</td>
                                <td>{{ $tkp->jenis }}</td>
                                <td>{{ $tkp->berat }}</td>
                                <td>{{ $tkp->harga }}</td>
                                <td>{{ $tkp->harga * $tkp->berat }}</td>
                                <td>{{ $tkp->harga * $tkp->berat / 7 }}</td>
                                <td>{{ $tkp->catatan }}</td>
                                @if(Auth::user()->role === 'boss')
                                    <td>
                                        <a class="btn btn-sm btn-primary feather icon-edit" href="{{ route('edit.hasil', $tkp->id) }}"></a>
                                        <form action="{{ route('hapus.hasil', $tkp->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger feather icon-trash"></button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        {{-- end isi tabel  --}}
                    </table>
                </div>
            </div>
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
