<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'ReCharge Riau - Sistem Pemetaan SPKLU Provinsi Riau')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('../css/styles.css') }}" rel="stylesheet" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
    <!-- Leaflet Search CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <!-- Leaflet Search JS -->
    <link rel="stylesheet" href="{{asset('leaflet-search/dist/leaflet-search.min.css')}}">
    <script src="{{asset('leaflet-search/dist/leaflet-search.min.js')}}"></script>
    
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">ReCharge Riau</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('lokasi') }}">Lokasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content Section -->
        @yield('content')

        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">&copy; 2025 UAS Sistem Informasi Geografis - Teknik Informatika - Universitas Muhammadiyah Riau</div></div>
                </div>
            </div>
        </footer>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('../js/scripts.js') }}"></script>
    <!-- Hidden Data for Map -->
    <tbody class="hidden">
        @foreach ($maps as $m)
            <input type="hidden" value="{{$m->id}}" id="lab{{$loop->index}}">
            <input type="hidden" value="{{$m->kotaorkab}}" id="kab{{$loop->index}}">
            <input type="hidden" value="{{$m->provinsi}}" id="prov{{$loop->index}}">
            <input type="hidden" value="{{$m->latitude}}" id="lat{{$loop->index}}">
            <input type="hidden" value="{{$m->longitude}}" id="lon{{$loop->index}}">
        @endforeach
        <input type="hidden" value="{{ $maps->count() ?? '' }}" id="index">
    </tbody>
    <script src="{{url('../js2/view.js')}}"></script>
</body>
</html>
