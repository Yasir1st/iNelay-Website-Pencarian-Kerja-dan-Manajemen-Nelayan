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
                                <table class="table">
                                    @foreach ($data_diri as $data)
                                        @if ($akun->id == $data->id)
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>{{ $data->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{ $data->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>{{ $data->tanggal_lahir }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Pernikahan</td>
                                                    <td>{{ $data->status_pernikahan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pengalaman Kerja</td>
                                                    <td>{{ $data->pengalaman_kerja }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon/WA</td>
                                                    <td>{{ $data->telepon_wa }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{ $data->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Deskripsi</td>
                                                    <td>{{ $data->deskripsi }}</td>
                                                </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <a href="{{ route('edit.dd',$data->id) }}"><button type="submit" class="btn  btn-primary" style="width: 100%;">Edit Data Diri</button></a>
                                    <div class="line2"></div>
                                    <div class="card">
                                        <img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="Card image cap">
                                    </div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
