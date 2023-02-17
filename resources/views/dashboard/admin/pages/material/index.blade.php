@extends('dashboard.admin.layouts.app')
@section('content')
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">


        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bold my-1 fs-3">
                Overview
            </h1>
            <!--end::Title-->


            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="../../index-2.html" class="text-gray-600 text-hover-primary">
                        Home                            </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    User Profile                                            </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">
                    Overview                    </li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-2 py-md-1">

            <!--begin::Button-->
            <a href="#" class="btn btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                Tambah            </a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <div class="content flex-column-fluid" id="kt_content">
        <div class="row">
            <form action="#">
                <!--begin::Card-->
                <div class="card mb-7">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Compact form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Input group-->
                            <div class="position-relative col-12">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
</svg>
</span>
                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search">
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Compact form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </form>
        </div>
        <div class="row">
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
@endsection
