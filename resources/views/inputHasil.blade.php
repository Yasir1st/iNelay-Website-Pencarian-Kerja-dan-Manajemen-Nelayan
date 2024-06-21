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
                            <li class="breadcrumb-item"><a href="#!">Input Hasil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        {{-- isi --}}
        <div class="card">
            <div class="card-body">
                <h3>Input Hasil Tangkapan & Penjualan</h3>
                <div class="line" style="width: 5%;"></div>
                <form action="{{ route('input.hasil') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Tanggal Penjualan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jenis Ikan</label>
                                <input name="jenis" type="text" class="form-control" id="exampleInputPassword1" placeholder="Input Jenis Ikan">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Berat(kg)</label>
                                <input name="berat" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Total Berat Ikan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga/kg</label>
                                <input name="harga" type="number" class="form-control" id="exampleInputPassword1" placeholder="Input Harga Ikan per kg">
                            </div>
                        </div>
                    </div>

                    <label for="exampleFormControlTextarea1">Catatan(Opsinal)</label>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Catatan Jika Ada"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn  btn-primary" style="width: 100%; height: 84px">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
