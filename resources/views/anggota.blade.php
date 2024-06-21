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
                            <li class="breadcrumb-item"><a href="#!">Anggota</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        {{-- isi --}}
        <div class="card">
            <div class="card-body">
                <h3>Paraguay</h3>
                <div class="line" style="width: 5%;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="jabatan">Boss</h4>
                        <img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                        <p style="font-size: 20px; margin-top: 10px;">Amir Khan</p>
                    </div>
                    <div class="col-md-10">
                        <h4 class="jabatan">Kru</h4>

                        {{-- anggota --}}
                        <div class="anggota row">
                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 15px">
                                <div class="row">
                                    <div class="col-md-5"><img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image"></div>
                                    <div class="col-md-7">
                                        <p style="font-size: 20px; margin-bottom: 3px;">Kummang</p>
                                        <div class="" style="margin-bottom: 3px;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">Detail</button></div>
                                        @if ($akun->role == 'boss')
                                            <div class=""><button type="button" class="btn btn-sm btn-danger" style="width: 100%">Hapus</button></div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- end anggota  --}}

                    </div>
                </div>
            </div>
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
