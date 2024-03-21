@extends('layouts/layoutMaster')

@section('title', 'Patients - Create Patient')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}" />

    {{--    <script src="{{asset('lib/jquery-3.4.1.min.js')}}"></script> --}}
    {{--    <script src="{{asset('lib/jquery-migrate-1.2.1.min.js')}}"></script> --}}
    {{--    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}"/> --}}
    {{--    <link href="{{asset('assets/font-awesome.min.css')}}" rel="stylesheet"> --}}
    {{--    <link rel="stylesheet" href="{{asset('dist/drawerJs.css')}}"/> --}}
    {{--    <script src="{{asset('dist/drawerJs.standalone.js')}}"></script> --}}
@endsection

{{-- @section('page-script')
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
@endsection --}}
@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
@endsection



@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Patients/</span> Patient Profile</h4>
    <!-- Header -->
    <div class="row">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <div class="col-12">
            <div class="card mb-4">
                {{-- <div class="user-profile-header-banner">
                    <img src="{{ $patient->gender == 'Male' ? asset('assets/img/user-male-circle.png') : asset('assets/img/user-female-circle.png') }}"
                        alt="Banner image" class="rounded-top">
                </div> --}}
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto user-avatar user-avatar-xl">
                        <img src="{{ $patient->gender == 'Male' ? asset('assets/img/user-male-circle.png') : asset('assets/img/user-female-circle.png') }}"
                            alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ $patient->user->firstname . ' ' . $patient->user->lastname }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item d-flex gap-1">

                                        <span class="badge bg-primary">{{ $patient->gender }}</span>
                                        <span class="badge bg-primary">{{ $patient->getAge() }}</span>
                                        <span class="badge bg-primary">Next Appointment: </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-icon btn-light waves-effect waves-light"
                                    data-bs-toggle="dropdown" data-boundary="viewport" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" style="">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit Patient</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Schedule Appointment</a></li>
                                    <li><a class="dropdown-item disabled" href="javascript:void(0);">Request Admission</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Fund Wallet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->
    <div class="row g-4">
        <div class="col-lg-6 col-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="badge rounded-pill p-2 bg-label-success mb-2">
                        <i class="ti ti-briefcase ti-sm"></i>
                    </div>
                    <h5 class="card-title mb-2">0.00</h5>
                    <small>Wallet Balance</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="badge rounded-pill p-2 bg-label-danger mb-2">
                        <i class="ti ti-briefcase ti-sm"></i>
                    </div>
                    <h5 class="card-title mb-2">0.00</h5>
                    <small>Outstanding Balance</small>
                    @if (session()->has('success'))
                        {{ session()->get('success') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-scroller">
                <ul class="nav nav-pills flex-column flex-sm-row mb-4" role="tablist" style="overflow-x:scroll;">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-visits" aria-controls="navs-pills-justified-visits"
                            aria-selected="true">
                            <i class="menu-icon tf-icons ti ti-calendar"></i> Visits
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-vitals" aria-controls="navs-pills-justified-vitals"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-activity-heartbeat ti-xs me-1"></i> Vitals
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-va" aria-controls="navs-pills-justified-va"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-eye ti-xs me-1"></i> V/A
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-allergies"
                            aria-controls="navs-pills-justified-allergies" aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-medical-cross ti-xs me-1"></i> Allergies
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-diagnosis"
                            aria-controls="navs-pills-justified-diagnoses" aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-stethoscope ti-xs me-1"></i> Diagnoses
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-lab" aria-controls="navs-pills-justified-lab"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-microscope ti-xs me-1"></i> Lab Requests
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-drugs" aria-controls="navs-pills-justified-drugs"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Drug Prescriptions
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-imaging" aria-controls="navs-pills-justified-imaging"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-photo ti-xs me-1"></i> Imaging
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-procedures"
                            aria-controls="navs-pills-justified-procedures" aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Procedures
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-opd" aria-controls="navs-pills-justified-opd"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Out Patient Treatment Sheet
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-documents"
                            aria-controls="navs-pills-justified-documents" aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Documents
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-bills" aria-controls="navs-pills-justified-bills"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Bills
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="navs-pills-justified-visits" role="tabpanel">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Date of Visit</th>
                                    <th>Triage Time</th>
                                    <th>Clinic</th>
                                    <th>Specialty</th>
                                    <th>Status</th>
                                    <th>---</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-vitals" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="" data-bs-toggle="modal" data-bs-target="#new-vitals-modal"
                                    class="btn btn-primary mb-2 float-end">New Entry</a>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        {!! $blood_pressure->container() !!}
                                    </div>
                                    <script src="{{ $blood_pressure->cdn() }}"></script>
                                    {{ $blood_pressure->script() }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        {!! $pulse->container() !!}
                                    </div>
                                    {{-- <script src="{{ $pulse->cdn() }}"></script> --}}
                                    {{ $pulse->script() }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        {!! $temperature->container() !!}
                                    </div>
                                    {{-- <script src="{{ $temperature->cdn() }}"></script> --}}
                                    {{ $temperature->script() }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        {!! $weight->container() !!}
                                    </div>
                                    {{-- <script src="{{ $weight->cdn() }}"></script> --}}
                                    {{ $weight->script() }}
                                </div>
                            </div>
                        </div>
                        @include('_partials._modals.modal-new-vitals')

                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-va" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="" data-bs-toggle="modal" data-bs-target="#new-va-modal"
                                    class="btn btn-primary mb-2 float-end">New Entry</a>
                            </div>
                            <livewire:vision-acuity :patientId="$patient->id" />

                        </div>
                        @include('_partials._modals.modal-new-va')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-allergies" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-allergies-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:allergies  :patientId="request()->route()->patient->id"/>
                        {{-- for some reason when i try to access the re --}}
                    @include('_partials._modals.modal-new-allergies')

                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-diagnosis" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:diagnoses />
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-lab" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-lab-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:lab-requests />
                        @include('_partials._modals.modal-new-lab')

                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-drugs" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Drug/Generic</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>---</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        @include('_partials._modals.modal-new-drugs')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-imaging" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-imaging-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:radiology-request />
                        @include('_partials._modals.modal-new-imaging')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-procedures" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">
                            <!-- thead -->
                            <thead class="thead-light">
                                <tr>
                                    <th>Request Date</th>

                                    <th>Procedure</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- tr -->

                                <tr>
                                    <td colspan="6">
                                        <div class="alert alert-warning">No Record to Display</div>
                                    </td>
                                </tr>

                            </tbody><!-- /tbody -->

                        </table>
                        @include('_partials._modals.modal-new-procedures')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-opd" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">

                            <thead class="thead-light">
                                <tr>
                                    <th width="20%">Due By</th>

                                    <th>Task Description</th>
                                    <th>Status</th>
                                    <th class="text-nowrap">Last Process Time</th>
                                    <th width="20%">User</th>
                                    <th>*</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        @include('_partials._modals.modal-new-opd')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-documents" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">

                            <thead class="thead-light">
                                <tr>
                                    <th>Date</th>
                                    <th>File</th>
                                    <th>Type</th>
                                    <th>User</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        @include('_partials._modals.modal-new-documents')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-bills" role="tabpanel">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <div class="thead-dd dropdown">
                                            <div
                                                class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                                                <input title="" type="checkbox" id="bill-select-all"
                                                    class="custom-control-input"><label class="custom-control-label"
                                                    for="bill-select-all"></label>
                                            </div>
                                            <div class="thead-btn" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                    class="fa fa-caret-down"></span></div>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-arrow"></div><a class="dropdown-item"
                                                    href="javascript:" id="item-select-all">Select all</a><a
                                                    class="dropdown-item" href="javascript:"
                                                    id="item-unselect-all">Unselect all</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                                    href="javascript:" id="add-to-invoice-btn">Add to Invoice</a><a
                                                    class="dropdown-item" href="javascript:" id="mini-receipt-btn">Print
                                                    mini receipt</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th class="text-right">Quantity</th>
                                    <th class="text-right">Credit</th>
                                    <th class="text-right">Debit</th>
                                    <th>Payer</th>
                                    <th>*</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
