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
                            <li class="breadcrumb-item"><a href="#!">Profil Kapal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        {{-- isi --}}
        <div class="card">
            <div class="row">
                <div class="col-md-8 columns">
                    <div class="card-body">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid d-block w-100" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                        </div>
                    </div>
                    <div class="detailKapal" style="padding: 20px">
                        <h4>Tentang Paraguay</h4>
                        <p class="mb-0 aboutINelay">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt facilis officia delectus omnis magnam impedit officiis incidunt quas aliquam assumenda repudiandae voluptates repellat nisi fugiat molestias corporis hic, harum ipsam unde cumque maxime fuga quaerat fugit. Quam sequi reiciendis, est nisi fugiat sint minus doloremque corrupti excepturi sunt. Suscipit porro consequuntur quod odit dolores facilis debitis quisquam, nesciunt natus, perspiciatis et, corrupti dolorem distinctio libero laboriosam. Quos doloribus officia aspernatur placeat ipsa blanditiis. Eligendi esse quas odit rerum nemo, libero nesciunt asperiores cupiditate tenetur voluptatum quisquam praesentium dolores deserunt amet dolor similique aliquid explicabo temporibus voluptate repellat soluta ratione iste dicta. Praesentium aliquid ab fugit! Doloribus error hic totam pariatur? Ipsum sunt quasi enim neque, nisi eaque mollitia quia ullam repellendus nam laudantium odit tempore aspernatur soluta, voluptatum sequi accusantium? Recusandae, tempore. Reprehenderit deserunt ea ipsa et adipisci tenetur optio laborum voluptatum fugit alias labore, qui id delectus esse quas molestias doloribus obcaecati! Quis optio ipsam ex labore nobis, at commodi veritatis temporibus eos neque, nulla reprehenderit modi nemo adipisci perspiciatis porro suscipit libero fugiat ducimus magnam tempora. Dolorum soluta aperiam aliquam eveniet magnam, voluptate incidunt animi aliquid blanditiis nam, dolor possimus voluptates corporis adipisci iure, totam rerum distinctio reprehenderit?
                        </p>
                    </div>
                </div>
                <div class="col-md-4 columns card-body">
                    <h3>Paraguay</h3>
                    <div class="line"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                        </div>
                        <div class="col-md-8" style="margin-top: 20px;">
                            <h4>Amir Khan</h4>
                            <h5>Pemilik</h5>
						</div>  
                    </div>
                    <table class="identitas" width="90%" style="margin-top: 20px">
                        <tr>
                            <td><p>Umur Kapal</p></td>
                            <td><p>: 20 Tahun</p></td>
                        </tr>
                        <tr>
                            <td><p>Jumlah Anggota Saat Ini</p></td>
                            <td><p>: 7 Orang</p></td>
                        </tr>
                        <tr>
                            <td><p>Alamat Kapal</p></td>
                            <td><p>: Pambusuang</p></td>
                        </tr>
                        <tr>
                            <td><p>Lokasi Kapal Berlayar</p></td>
                            <td><p>: Kendari</p></td>
                        </tr>
                        <tr>
                            <td><p>Rentan Hasil Perbulan</p></td>
                            <td><p>: 3 - 4 Juta/Bulan</p></td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-5"><button type="button" class="btn  btn-primary" style="width: 100%">Kontak</button></div>
                        @if ($akun->role == 'kru')
                            <div class="col-md-5"><button type="button" class="btn  btn-danger" style="width: 100%">Resign</button></div>
                        @endif
                    </div>
                </div>
            </div> 
        </div>
        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
