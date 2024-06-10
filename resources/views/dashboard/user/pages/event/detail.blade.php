@php
    use Carbon\Carbon;
@endphp
@extends('dashboard.user.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
@endsection
@section('content')
    @if ($errors->any())
        <x-errors-component />
    @endif
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">


            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8 ">

                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack flex-wrap ">
                        <!--begin::Toolbar wrapper-->
                        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">


                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                                <!--begin::Title-->
                                <h1
                                    class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                                    {{ $event->id }}
                                </h1>
                                <!--end::Title-->

                                <!--begin::Breadcrumb-->
                                {{-- <p class="fw-semibold fs-7 my-0 text-muted">List
                                    tantangan {{ auth()->user()->name }}</p> --}}
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3 py-2 py-md-1">

                                <!--begin::Button-->
                                {{-- @dd($participant) --}}
                                @if ($participant && $participant['certificate'])
                                    <a href="{{ route('student.events.print-certify', ['event' => $event->id, 'participant' => $participant['following']->id]) }}"
                                        class="btn btn-primary btn-active-light-primary h-40px fs-7 fw-bold">Download
                                        Sertifikat
                                    </a>
                                @endif
                                <a href="{{ route('student.events.index') }}"
                                    class="btn btn-flex btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">
                                    <i class="bi bi-arrow-left me-2"></i> Kembali
                                </a>
                                <!--end::Button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-fluid ">
                    <div class="card-body">
                        <!--begin::About-->
                        <div class="mb-18">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Overlay-->
                                <div class="overlay">
                                    <!--begin::Image-->
                                    <img class="w-100 h-500px card-rounded" src="{{ asset('storage/' . $event->photo) }}"
                                        alt="" style="">
                                    <!--end::Image-->

                                    <!--begin::Links-->
                                    {{-- <div class="overlay-layer card-rounded bg-dark bg-opacity-25" data-event="{{ $event->id }}">
                            @if (auth()->user()->roles->pluck('name')[0] == 'student')
                                <form action="{{ route('student.events.follow', $event->id) }}" method="POST"
                                    id="form-follow">
                                    @csrf
                                    <button type="button"
                                        class="btn btn-light-primary ms-3 follow-event-btn">Daftar</button>
                                </form>
                            @endif
                        </div> --}}
                                    <!--end::Links-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold text-gray-600">

                                <h1 class="mb-4">{{ $event->title }}</h1>
                                <!--begin::Text-->
                                <div class="mb-8">
                                    {!! $event->description !!}
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::About-->

                        @if ($event->start_date >= Carbon::now())
                            <!--begin::Section-->
                            <div class="mb-16">
                                <!--begin::Top-->
                                <div class="text-center mb-12">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-gray-900 mb-5">Dokumentasi Event</h3>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    {{-- <div class="fs-5 text-muted fw-semibold">
                        Dokumentasi hasil foto
                    </div> --}}
                                    <!--end::Text-->
                                </div>
                                <!--end::Top-->

                                <!--begin::Row-->
                                <div class="owl-carousel">
                                    @foreach ($event->documentations as $documentation)
                                        <div>
                                            <img src="{{ asset('storage/' . $documentation->media) }}" alt=""
                                                class="documentation_image col w-300px m-auto rounded"
                                                data-image="{{ asset('storage/' . $documentation->media) }}">
                                        </div>
                                    @endforeach
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                        @endif


                        <!--begin::Team-->
                        <!--end::Team-->




                        <div class="mb-7">
                            <div class="row">
                                <div class="col">
                                    <p>Acara</p>
                                </div>
                                <div class="col-11">: {{ $event->title }}</div>
                                <div class="col">
                                    <p>Tanggal</p>
                                </div>
                                <div class="col-11">:
                                    {{ Carbon::parse($event->start_date)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                </div>
                                <div class="col">
                                    <p>Waktu</p>
                                </div>
                                <div class="col-11">: {{ Carbon::parse($event->start_date)->format('H:m') }}</div>
                                <div class="col">
                                    <p>Tempat</p>
                                </div>
                                <div class="col-11">: {{ $event->location }}</div>
                            </div>
                        </div>
                        {{-- @dd($event->start_date) --}}
                        @if ($participant && $participant['following'])
                            @if ($event->start_date > now())
                                <form action="{{ route('student.events.unfollow', $event->id) }}" method="POST"
                                    class="text-end pb-16" id="unfollow-form">
                                    @method('delete')
                                    @csrf
                                    <button type="button" class="btn btn-danger py-2" id="unfollow-btn">Batal
                                        Mengikuti</button>
                                </form>
                            @else
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-light-primary py-2">Telah Mengikuti</button>
                                </div>
                            @endif
                        @elseif($event->start_date > Carbon::now()->locale('id'))
                            <form action="{{ route('student.events.follow', $event->id) }}" method="POST"
                                class="text-end pb-16" id="follow-form">
                                @csrf
                                <button type="button" class="btn btn-primary py-2" id="follow-btn">Ikuti</button>
                            </form>
                        @else
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-light-warning py-2">Telah Dimulai</button>
                            </div>
                        @endif
                        <!--end::Card-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="show_image">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <img src="" alt="">
            </div>
        </div>
    </div>

    {{-- <div class="modal" tabindex="-1" id="add_documentattion">
        <form action="{{ route('admin.eventDocumentation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title border-0">Modal title</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto Dokumentasi</label>
                            <input type="file" class="form-control" name="photo" id="photo" />
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div> --}}
    <x-delete-modal-component />
    @php
        $documentation_count = count($event->documentations);
    @endphp
@endsection
@section('script')
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: {{ $documentation_count < 2 ? $documentation_count : 3 }},
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                fixedWidth: 300,
                autoWidth: false,
                center: true,
            });
        });
    </script>

    <script>
        $(document).on('click', '.delete', function() {
            const url = "{{ route('admin.rollingMentor.deleteRollingMentor', ':id') }}".replace(':id', $(this)
                .data(
                    'id'))
            $('#form-delete').attr('action', url)

            $('#kt_modal_delete').modal('show')
        })

        $('#follow-btn').click(function(e) {
            Swal.fire({
                text: "Apakah anda ingin mengikuti event ini?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: 'Tidak',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function(params) {
                if (params.value) {
                    $('#follow-form').submit()
                }
            });
        })
        $('#unfollow-btn').click(function(e) {
            Swal.fire({
                text: "Apakah anda batal mengikuti event ini?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ya",
                cancelButtonText: 'Tidak',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function(params) {
                if (params.value) {
                    $('#unfollow-form').submit()
                }
            });
        })

        $(document).ready(function() {
            const datepicker = new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_basic"));
            datepicker.dates.formatInput = date => moment(date).format('YYYY-MM-DD H:m:s')
            const datepicker2 = new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_basic_2"));
            datepicker2.dates.formatInput = date => moment(date).format('YYYY-MM-DD H:m:s')
        })

        $('.documentation_image').click(function() {
            $('#show_image img').attr('src', $(this).data('image'))
            $('#show_image').modal('show')
        })
    </script>
@endsection
