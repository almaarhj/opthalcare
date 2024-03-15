@extends('layouts/layoutMaster')

@section('title', 'Vital Care Settings')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/cards-advance.js') }}"></script>
    {{-- <script src="{{asset('assets/js/modal-edit-user.js')}}"></script> --}}
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings</span>
    </h4>

    <div class="row">
        <!-- Monthly Campaign State -->
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">System Settings</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#editSystem">View/Update</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Change System Settings Here</h6>
                </div>
            </div>
        </div>
        <!--/ Monthly Campaign State -->

        <!-- Active Projects -->
        <div class="col-xl-8 col-md-8 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Services</h5>
                        {{-- <small class="text-muted">Average 72% Completed</small> --}}
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="activeProjects" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#newService">New Service</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:service-categories />
                </div>
            </div>
        </div>
        <!--/ Active Projects -->

        <!-- Earning Reports -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Departments</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#newDepartment">New Department</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <livewire:department />
                </div>
            </div>
        </div>
        <!--/ Earning Reports -->

        <!-- Browser States -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Documents</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#newDocument">New Document</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:document />
                </div>
            </div>
        </div>
        <!-- Sales By Country -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">HMO Groups</h5>
                        {{-- <small class="text-muted">Monthly Sales Overview</small> --}}
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#newHmoGroup">New Hmo Group</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:hmo-groups />
                </div>
            </div>
        </div>
        <!--/ Sales By Country -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">HMO Plans</h5>
                        {{-- <small class="text-muted">Monthly Sales Overview</small> --}}
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#newHmoGroup">New Hmo Group</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:hmo-groups />
                </div>
            </div>
        </div>
        <!--/ Sales By Country -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Religions</h5>
                        {{-- <small class="text-muted">Monthly Sales Overview</small> --}}
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#new-religion-modal">New Religion</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:religions />
                </div>
            </div>
        </div>
        <!--/ Sales By Country -->
        <h2>Tariffs</h2>
        <!--/ Browser States -->
        <div class="col-md-6 col-xl-4 mb-4">

            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Admissions</h4>
                    <p class="small">Manage Wards, Beds, Routes for Fluid Chart</p>
                    <a href="{{ route('app.settings.admission') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-xl-4 mb-4">

            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Antenatal</h4>
                    <p class="small">Manage Antenatal Locations, Packages, and Other Data</p>
                    <a href="{{ route('app.settings.antenatal') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Consultations</h4>
                    <p class="small">Configure Consultation Locations, Manage Specialties, Consultation Documentation
                        Templates</p>
                    <a href="{{ route('app.settings.consultations') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Consumables</h4>
                    <p class="small">Manage Medical Consumables and Stock</p>
                    <a href="{{ route('app.settings.consumables') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Dialysis</h4>
                    <p class="small">Manage Dialysis Locations, Services, Machines, and Other Data</p>
                    <a href="{{ route('app.settings.dialysis') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Laboratory</h4>
                    <p class="small">Configure Laboratory Locations, Manage Lab Tests, Report Layouts</p>
                    <a href="{{ route('app.settings.laboratory') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Medical Procedures</h4>
                    <p class="small">Manage Medical Procedures, Locations, Categories</p>
                    <a href="{{ route('app.settings.procedures') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Pharmacy</h4>
                    <p class="small">Configure Pharmacy Locations, Manage Drugs and Batches and Drug Inventory</p>
                    <a href="{{ route('app.settings.pharmacy') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="mb-2 pb-1">Radiology</h4>
                    <p class="small">Configure Radiology Locations, Manage Radiological Investigations, Report Layouts</p>
                    <a href="{{ route('app.settings.radiology') }}"
                        class="btn btn-primary w-100 waves-effect waves-light">Open</a>
                </div>
            </div>
        </div>
    </div>
    @include('_partials/_modals/modal-system-settings')
@endsection
