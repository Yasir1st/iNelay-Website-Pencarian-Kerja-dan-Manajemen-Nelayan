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
                            <li class="breadcrumb-item"><a href="/lowongan"><i class="feather icon-user"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Diri</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Data Diri</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        {{-- isi --}}
        <div class="card">
            <div class="card-body">
                <h3>Data Diri</h3>
                <div class="line" style="width: 5%;"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <form action="{{ route('update.dd',$data->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama" value="{{ $data->nama }}" name="nama">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat" value="{{ $data->alamat }}" name="alamat">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>
                                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Lahir" value="{{ $data->tanggal_lahir }}" name="tgl">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jenis Kelamin" value="{{ $data->jenis_kelamin }}" name="jk">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Pernikahan</td>
                                            <td>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Status Pernikahan" value="{{ $data->status_pernikahan }}" name="sp">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pengalaman Kerja</td>
                                            <td>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Pengalaman Kerja" name="pk">{{ $data->pengalaman_kerja }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telepon/WA</td>
                                            <td>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon / WA" value="{{ $data->telepon_wa }}" name="tlp">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Email" value="{{ $data->email }}" name="email">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi Tentang Dirimu" name="deskripsi">{{ $data->deskripsi }}</textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <button type="submit" class="btn  btn-primary" style="width: 100%;">Simpan Perubahan</button>
                            <div class="line2"></div>
                            <div class="card">
                                <img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-3.jpg" alt="Card image cap">
                            </div>
                            <div class="line2"></div>
                            <button type="submit" class="btn  btn-danger" style="width: 100%;">Ganti Foto Profil</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
