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
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        {{-- isi --}}
        <div style="background-image: url('{{ asset('tema/dist/assets/images/hero.jpg') }}');" class="img-fluid hero" alt=""></div>
        <div>
            <h4>Tentang iNelay</h4>
            <p class="mb-0 aboutINelay" style="text-indent: 40px; line-height: 1.7;">
                iNelay adalah sebuah platform inovatif yang dirancang khusus untuk nelayan, menyediakan solusi terpadu bagi mereka dalam mencari pekerjaan dan mengelola aktivitas sehari-hari mereka. Dengan fitur pencarian kerja nelayan yang intuitif, platform ini memungkinkan para nelayan untuk dengan mudah menemukan pekerjaan yang sesuai dengan lokasi, jenis pekerjaan, dan kriteria lainnya. Di sisi lain, iNelay juga menawarkan kemudahan dalam manajemen profil, memungkinkan nelayan untuk membangun profil pribadi yang mencakup pengalaman kerja, keterampilan, serta riwayat pekerjaan dan ulasan dari pengusaha atau perusahaan tempat mereka bekerja.
            </p>
            <p class="mb-0 aboutINelay" style="text-indent: 40px; line-height: 1.7;">
                Tidak hanya itu, iNelay juga dilengkapi dengan fitur manajemen penghasilan yang memungkinkan nelayan untuk mencatat penghasilan mereka dari setiap pekerjaan yang telah mereka lakukan. Mereka dapat melacak penghasilan secara rinci dan transparan, memberikan visibilitas yang lebih baik terhadap aspek finansial dari pekerjaan mereka. Selain itu, platform ini juga menawarkan fitur pembagian hasil yang memungkinkan nelayan yang bekerja dalam kelompok atau armada untuk mencatat dan memantau pembagian hasil dari tangkapan atau hasil kerja bersama secara adil dan efisien.    Dengan demikian, iNelay bukan hanya sekadar aplikasi pencarian kerja untuk nelayan, tetapi juga merupakan platform lengkap yang memungkinkan mereka untuk mengelola aktivitas dan keuangan mereka dengan lebih baik, memberikan dampak positif yang signifikan bagi kehidupan dan pekerjaan mereka.
            </p>
        </div>

        {{-- end isi --}}

    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
