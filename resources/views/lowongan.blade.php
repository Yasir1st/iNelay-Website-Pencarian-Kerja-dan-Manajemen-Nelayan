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
                            <li class="breadcrumb-item"><a href="/lowongan"><i class="feather icon-globe"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Lowongan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        {{-- isi --}}
        <div>
            @if ($akun->role == 'boss')
                <h5 class="m-b-10">Buka Lowongan Kerja</h5>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Yes / No</label>
                </div>
            @endif
            
            <div class="lowonganKerja">
				<h3>Pekerjaan Yang Tersedia</h3>
                <div class="line"></div>
                <div class="card-columns">
					<div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="/lowonganSelengkapnya"><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
						</div>
					</div>
                    <div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=""><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
						</div>
					</div>
                    <div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=""><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
						</div>
					</div>
                    <div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=""><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
						</div>
					</div>
                    <div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=""><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
						</div>
					</div>
                    <div class="card">
						<img class="img-fluid card-img-top" src="{{ asset('tema') }}/dist/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Paraguay</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=""><button class="btn  btn-primary">Lihat Selengkapnya</button></a>	
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
