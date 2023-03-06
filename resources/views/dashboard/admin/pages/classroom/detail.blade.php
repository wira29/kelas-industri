@extends('dashboard.admin.layouts.app')
@section('content')
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                Pengenalan HTML
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    Jl Kedungpedaringan, Kepanjen
                </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{ url()->previous() }}" class="btn btn-flex btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">
                <i class="bi bi-arrow-left me-2"></i> Kembali
            </a>
        </div>
        <!--end::Actions-->
    </div>
    <div class="content flex-column-fluid" id="kt_content">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b">

                    <div class="card-body">

                        <!--begin::Details-->

                        <div class="d-flex mb-9">

                            <!--begin: Pic-->

                            <div class="flex-shrink-0 me-7 mt-lg-0 mt-3">

{{--                                <div class="symbol symbol-50 symbol-lg-120">--}}

{{--                                    <img src="/public/assets/media/sekolah/20220726214620.png" alt="image">--}}

{{--                                </div>--}}



                                <div class="symbol symbol-50px">
                                    <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">L</div>
                                </div>

                            </div>

                            <!--end::Pic-->



                            <!--begin::Info-->

                            <div class="flex-grow-1">

                                <!--begin::Title-->

                                <div class="d-flex justify-content-between flex-wrap mt-1">

                                    <div class="d-flex flex-row align-items-center me-3">

                                        <p class="fw-bolder text-hover-primary h5 font-weight-bold mb-0 me-3">SMKN 1 Kepanjen
                                        </p>

                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/general/gen026.svg-->
                                        <span class="svg-icon svg-icon-success svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                          <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
                                          <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
                                        </svg></span>
                                                                                <!--end::Svg Icon-->

                                    </div>

                                </div>

                                <!--end::Title-->



                                <!--begin::Content-->

                                <div class="d-flex flex-wrap justify-content-between mt-1">

                                    <div class="d-flex flex-column flex-grow-1 pr-8">

                                        <div class="d-flex flex-wrap mb-1">

                                            <p class="text-muted text-hover-dark font-weight-bold me-lg-8 me-5 mb-lg-0 mb-2"><i class="las la-user-tie me-2 fs-3"></i>Lasmono, S.Pd., MM</p>

                                        </div>

                                        <div class="d-flex flex-wrap mb-1">

                                            <p class="text-muted text-hover-dark font-weight-bold me-lg-8 me-5 mb-lg-0 mb-2"><i class="las la-envelope me-2 fs-3"></i>smkn1kepanjen@hummasoft.com</p>

                                        </div>

                                        <div class="d-flex flex-wrap mb-1">

                                            <p class="text-muted text-hover-dark font-weight-bold me-lg-8 me-5 mb-lg-0 mb-2"><i class="las la-phone me-2 fs-3"></i>(+62) 341395777</p>

                                        </div>

                                        <div class="d-flex flex-wrap mb-4">

                                            <p class="text-muted text-hover-dark font-weight-bold me-lg-8 me-5 mb-lg-0 mb-2"><i class="las la-map-marker-alt me-2 fs-3"></i>Jl, Ngadiluwih, Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163</p>

                                        </div>

                                    </div>

                                </div>

                                <!--end::Content-->

                            </div>

                            <!--end::Info-->

                        </div>

                        <!--end::Details-->



                        <div class="separator separator-solid"></div>



                        <!--begin::Items-->

                        <div class="d-flex align-items-center flex-wrap mt-8">

                            <!--begin::Item-->

                            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">

                                <span class="me-4">

                                    <i class="las la-chalkboard-teacher text-muted fs-3x"></i>

                                </span>

                                <div class="d-flex flex-column text-dark-75">

                                    <span class="fw-bolder font-size-sm">Guru</span>

                                    <span class="fw-bolder font-size-h5">

                                        <span class="text-dark-50 font-weight-bold"></span>3</span>

                                </div>

                            </div>

                            <!--end::Item-->



                            <!--begin::Item-->

                            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">

                                <span class="me-4">

                                    <i class="las la-user-friends text-muted fs-3x"></i>

                                </span>

                                <div class="d-flex flex-column text-dark-75">

                                    <span class="fw-bolder font-size-sm">Siswa</span>

                                    <span class="fw-bolder font-size-h5">

                                        <span class="text-dark-50 font-weight-bold"></span>73</span>

                                </div>

                            </div>

                            <!--end::Item-->



                            <!--begin::Item-->

                            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">

                                <span class="me-4">

                                    <i class="las la-university text-muted fs-3x"></i>

                                </span>

                                <div class="d-flex flex-column text-dark-75">

                                    <span class="fw-bolder font-size-sm">Kelas</span>

                                    <span class="fw-bolder font-size-h5">

                                        <span class="text-dark-50 font-weight-bold"></span>2</span>

                                </div>

                            </div>

                            <!--end::Item-->

                        </div>

                        <!--begin::Items-->

                    </div>

                </div>
            </div>
            <div class="col-12 mt-7">
                <div class="card">
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Guru</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">daftar guru di SMKN 1 Kepanjen.</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <div class="card-body">

                        <table id="kt_datatable_responsive" class="table table-striped border rounded gy-5 gs-7">
                            <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Sekolah</th>
                                <th>Poin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><span class="badge badge-light-danger">2011/04/25</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="toolbar mt-7 mb-lg-7" id="kt_toolbar">

                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                        List Kelas
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            list kelas SMKN 1 Kepanjen
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ url()->previous() }}" class="btn btn-flex btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">
                        <i class="bi bi-arrow-left me-2"></i> Filter
                    </a>
                </div>
                <!--end::Actions-->
            </div>
            <div class="col-12 mt-3">
                <div class="col-xl-4">

                    <!--begin::Card-->

                    <div class="card card-custom gutter-b card-stretch">

                        <!--begin::Body-->

                        <div class="card-body">

                            <!--begin::Section-->

                            <div class="d-flex align-items-center">

                                <!--begin::Pic-->

                                <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle symbol-primary me-5">

                                    <span class="font-size-h5 symbol-label font-weight-boldest">PE</span>



                                </div>

                                <!--end::Pic-->

                                <!--begin::Info-->

                                <div class="d-flex flex-column mr-auto">

                                    <!--begin: Title-->

                                    <a href="https://class.hummasoft.com/siswa/materi/11/4" class="card-title text-hover-primary font-weight-bolder font-size-h6 text-dark mb-1">

                                        Pengenalan HTML
                                    </a>



                                    <span class="text-muted font-weight-bold">

                                            Bab dan tugas  untuk Pengenalan HTML
                                        </span>

                                    <!--end::Title-->

                                </div>

                                <!--end::Info-->



                            </div>

                            <!--end::Section-->

                            <!--begin::Content-->



                            <!--end::Content-->

                            <!--begin::Text-->

                            <p class="mb-7 mt-5">

                                Mengenal website dari dasar
                            </p>

                            <!--end::Text-->



                        </div>

                        <!--end::Body-->

                        <!--begin::Footer-->

                        <div class="card-footer d-flex flex-row justify-content-between">

                            <div class="d-flex">

                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/general/gen028.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="currentColor"/>
    <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor"/>
</svg>
</span>
                                    <!--end::Svg Icon-->
                                    <a href="https://class.hummasoft.com/siswa/materi/11/4" class="fw-bold text-info ml-2">5 Bab</a>



                                </div>



                            </div>

                            <a href="{{ route('student.submaterial') }}" class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</a>

                        </div>

                        <!--end::Footer-->

                    </div>

                    <!--end::Card-->

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#kt_datatable_responsive").DataTable({
            responsive: true
        });
    </script>
@endsection
