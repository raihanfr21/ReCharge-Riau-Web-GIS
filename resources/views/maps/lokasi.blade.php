@extends('layouts.app')

@section('title', 'ReCharge Riau - Sistem Pemetaan SPKLU Provinsi Riau')

@section('content')
        <!-- Projects Section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">LOKASI</h2>
                    <h3>Cek lokasi SPKLU di Provinsi Riau</h3>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
<!-- Project Card 1-->
<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
    <div class="card-body p-0">
        <div class="d-flex align-items-center">
            <div class="p-5">
                <h2 class="fw-bolder">PLN UP3 Pekanbaru</h2>
                <p>
                    <i class="bi bi-geo-alt"></i> Jl. DR Setia Budhi No.57 Pekanbaru
                    <br><i class="bi bi-clock"></i> 24 Jam
                </p>
                <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                <a href="https://www.google.com/maps/place/0%C2%B032'09.8%22N+101%C2%B027'03.3%22E/@0.5361663,101.4497919,17.82z/data=!4m4!3m3!8m2!3d0.536053!4d101.450923?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
            </div>
            <img class="img-fluid" src="{{ url('../img/setiabudi1.jpg') }}" alt="..." style="width: 400px; height: auto;" />
        </div>
    </div>
</div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Kantor Gubernur Riau</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Jend Sudirman No. 460, Jadirejo, Sukajadi, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>2 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Signet FC200K - 200 kW</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> A CCS2
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> B CCS2
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B031'00.1%22N+101%C2%B026'46.2%22E/@0.5167084,101.4435811,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.516703!4d101.446156?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/gubernur1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 3-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Transmart Pekanbaru A</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Musyawarah No. 11, Labuh Baru Tim., Payung Sekaki, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>CS AC Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B030'12.3%22N+101%C2%B025'11.4%22E/@0.5034104,101.4172681,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.503405!4d101.419843?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/transmarta1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 4-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Transmart Pekanbaru B</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Musyawarah No. 11, Labuh Baru Tim., Payung Sekaki, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>CS AC Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B030'10.3%22N+101%C2%B025'11.7%22E/@0.5028724,101.4173341,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.502867!4d101.419909?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/transmartb1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 5-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Mal SKA Pekanbaru </h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Complex Mal SKA, Jl. Soekarno Hatta, Delima, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>CS AC Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B029'55.7%22N+101%C2%B025'05.5%22E/@0.4984529,101.417803,19.02z/data=!4m4!3m3!8m2!3d0.498803!4d101.418184?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/malska1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 6-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN ULP Kota Barat</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Dirgantara Timur No. 59, Sidomulyo Tim., Marpoyan Damai, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>Delta AC Max</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B028'40.6%22N+101%C2%B025'27.8%22E/@0.4779786,101.4227973,17.62z/data=!4m4!3m3!8m2!3d0.477945!4d101.424392?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/kotabarat1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 7-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN ULP Simpang Tiga</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Kartama, Perhentian Marpoyan, Marpoyan Damai, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>Delta AC Max</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B026'38.9%22N+101%C2%B026'43.1%22E/@0.4442788,101.4442533,17.75z/data=!4m4!3m3!8m2!3d0.444128!4d101.445309?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/sptiga1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 8-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Taman AeroSport</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Kaharuddin Nst No. 169c, Perhentian Marpoyan, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>CS AC Charger</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B028'00.2%22N+101%C2%B027'15.0%22E/@0.4667224,101.4515891,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.466717!4d101.454164?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/aerosport1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 9-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Hotel Prime Park</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Jend Sudirman No. 3, Simpang Tiga, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>CS AC Charger</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B028'24.7%22N+101%C2%B027'18.6%22E/@0.4735244,101.4525961,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.473519!4d101.455171?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/primepark1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 10-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Wuling Arista Pekanbaru</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Jend Sudirman No. 228, Tangkerang Tengah, Marpoyan Damai, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>Wuling AC 7 kW</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> GBT - 7,4 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B029'02.1%22N+101%C2%B027'14.1%22E/@0.4839274,101.4513271,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.483922!4d101.453902?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/wuling1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 11-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN ULP PANAM</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. HR Soebrantas No.12, Simpang Baru, Tampan, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>Delta AC Max</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B027'49.9%22N+101%C2%B022'44.1%22E/@0.4638534,101.3763471,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.463848!4d101.378922?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/400x300/343a40/6c757d" alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 12-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Agung Toyota Harapan Raya</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Imam Munandar, Tangkerang Tim., Tenayan Raya, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>Delta AC Max</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 22 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B029'39.8%22N+101%C2%B029'47.6%22E/@0.4943844,101.4939771,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.494379!4d101.496552?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/400x300/343a40/6c757d" alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 13-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN UID RIAU & KEPRI</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Tambusai Ujung Gg. Musyawarah, Labuh Baru Barat, Payung Sekaki, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B030'07.1%22N+101%C2%B024'38.6%22E/@0.5019754,101.4081341,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.50197!4d101.410709?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/nangka1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 14-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Hyundai Panam</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. HR Soebrantas, Simpang Baru, Tampan, Pekanbaru
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>AC Mini Plus</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC Type 2 - 7,4 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B027'51.2%22N+101%C2%B023'31.0%22E/@0.4643288,101.3901801,17.72z/data=!4m4!3m3!8m2!3d0.46422!4d101.39194?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/hyundai1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 15-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Rest Area KM 36 A Pekanbaru - Bangkinang</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Tol Pekanbaru - Bangkinang KM 36 A, Muara Jalai, Bangkinang, Kampar, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B024'41.2%22N+101%C2%B002'50.3%22E/@0.4114594,101.0447251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d0.411454!4d101.0473?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/pkubkn1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 16-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Rest Area KM 45 A Pekanbaru - Dumai</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Tol Pekanbaru - Dumai KM 45 A, Kandis, Siak, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B056'11.6%22N+101%C2%B013'49.8%22E/@0.9368005,101.2289742,17.47z/data=!4m4!3m3!8m2!3d0.936552!4d101.230508?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/pkudmi1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 17-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN UP3 DUMAI</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Jend Sudirman No. 185b, Bintan, Dumai, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/1%C2%B040'11.2%22N+101%C2%B026'51.0%22E/@1.6697684,101.4449111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d1.669763!4d101.447486?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/dumai1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 18-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN ULP DURI</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Hangtuah, Air Jamban, Mandau, Bengkalis, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>1 Konektor Tersedia:</strong>
                    <p>CS DC Charger</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 30 kW<br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/1%C2%B016'43.2%22N+101%C2%B010'55.3%22E/@1.2786774,101.1794411,17z/data=!3m1!4b1!4m4!3m3!8m2!3d1.278672!4d101.182016?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/duri1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 19-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN UP3 RENGAT</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Jl. Lintas Timur, Desa Sungai Dawu, Rengat Barat, Indragiri Hulu, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>2 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Signet FC200K - 200 kW</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> A CCS2
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> B CCS2
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B023'30.4%22S+102%C2%B026'11.6%22E/@-0.3917716,102.4339821,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-0.391777!4d102.436557?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/rengat1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 20-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">PLN ULP TALUK KUANTAN</h2>
                                        <p>
                                            <i class="bi bi-geo-alt"></i> Ps. Taluk, Kuantan Tengah, Kuantan Singingi, Riau
                                            <br><i class="bi bi-clock"></i> 24 Jam
                                        </p>
                                        <div class="mb-3">
                    <strong>3 Konektor Tersedia:</strong>
                    <div class="d-flex flex-wrap">
                    <p>Delta DC 50 kW City Charger</p>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CCS2 - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> CHADEMO - 50 kW DC <br>
                        </div>
                        <div class="me-3">
                            <i class="bi bi-lightning"></i> AC TYPE 2 - 22 kW DC <br>
                        </div>
                    </div>
                </div>
                                        <a href="https://www.google.com/maps/place/0%C2%B031'53.6%22S+101%C2%B034'13.6%22E/@-0.5315496,101.5678711,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-0.531555!4d101.570446?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary">Petunjuk Arah</a>
                                    </div>
                                    <img class="img-fluid" src={{ url('../img/talukkuantan1.jpg') }} alt="..." style="width: 400px; height: auto;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('../js/scripts.js') }}"></script>
</body>
</html>
@endsection