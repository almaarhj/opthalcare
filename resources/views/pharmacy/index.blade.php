@extends('layouts/layoutMaster')

@section('title', 'Fullcalendar - Apps')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fullcalendar/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-calendar.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-calendar-events.js') }}"></script>
    <script src="{{ asset('assets/js/app-calendar.js') }}"></script>
@endsection

@section('content')
    <div class="card">
        <!-- .card-header -->
        <div class="card-header">
            <form class="filterForm d-flex justify-content-between">
                <input type="hidden" name="csrfmiddlewaretoken"
                    value="1fd4p98pTAA05S0JbPbAbj9JJX5XPt4sjL117CWRn83C6JZTKMCk5Kryiak7O2zg">
                <div class="form-group flex-fill">
                    <label class="" for="patient_id">Filter By Patient</label>
                    <select name="patient_id" id="patient_id" class="form-control filter select2-hidden-accessible"
                        title="" data-placeholder="Filter by Patient" data-select2-id="patient_id" tabindex="-1"
                        aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                        dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" title="" tabindex="0"
                                aria-labelledby="select2-patient_id-container"><span class="select2-selection__rendered"
                                    id="select2-patient_id-container" role="textbox" aria-readonly="true"><span
                                        class="select2-selection__placeholder">Filter by Patient</span></span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
                <div class="form-group flex-fill ml-2">
                    <label class="" for="location_id">Filter By Location</label>
                    <select id="location_id" name="location_id" class="custom-select form-control filter">
                        <option value="">- All -</option>
                        <option value="18">SOKOTO DIAGNOSTIC CENTRE</option>

                    </select>
                </div>
                <div class="form-group flex-fill ml-2">
                    <input type="hidden" name="start" class="filter sr-only">
                    <input type="hidden" name="stop" class="filter sr-only">
                    <label for="reportrange">Filter By Request Date</label>
                    <div id="reportrange" class="form-control d-flex custom-select">
                        <i class="mt-1 fa fa-calendar"></i>&nbsp;
                        <span>12/7/2023 - 12/7/2023</span>
                    </div>
                </div>
            </form>
        </div><!-- /.card-header -->
        <!-- .table-responsive -->
        <div class="table-responsive">
            <!-- .table -->
            <table class="table">
                <!-- thead -->
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Patient</th>
                        <th>Drug/Generic</th>
                        <th>Requester</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tr -->

                    <tr>
                        <td class="align-middle text-nowrap">Nov. 27, 2023, 7:15 a.m.</td>
                        <td class="align-middle">Bashar, Tsalha [CID008821]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Albendazole (400mg)

                            </span>


                        </td>
                        <td class="align-middle">Abubakar Sadiq Muhammad</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/996/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/996/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/996/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/996/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Sept. 12, 2023, 5:50 p.m.</td>
                        <td class="align-middle">Idris Gobir, Muhammad [CID014962]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Ofloxacin (10ml)

                            </span>


                        </td>
                        <td class="align-middle">Mustapha Bature</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/990/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/990/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/990/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/990/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Aug. 28, 2023, noon</td>
                        <td class="align-middle">Hamza, Umar [CID016903]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Arthrotec (75mg)

                            </span>


                        </td>
                        <td class="align-middle">Isah Shehu</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/989/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/989/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/989/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/989/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Aug. 11, 2023, 11:18 a.m.</td>
                        <td class="align-middle">Patient, Demo [CID007070]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Paracetamol (300mg)

                            </span>


                        </td>
                        <td class="align-middle">Shamsuddeen Aliyu</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/987/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/987/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/987/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/987/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Aug. 9, 2023, 4:58 p.m.</td>
                        <td class="align-middle">Sani, Dr Aminu Zauro [CID016240]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Normal saline

                            </span>


                        </td>
                        <td class="align-middle">Abdul Baba</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/986/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/986/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/986/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/986/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Aug. 9, 2023, 9:57 a.m.</td>
                        <td class="align-middle">Shehu, Hadiza Umar [CID010078]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                paracetamol (1g)

                            </span>

                            <span class="badge badge-lg bg-primary mb-1">

                                Amoxil Beecham imox (500mg)

                            </span>


                        </td>
                        <td class="align-middle">Aminu Umar</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/984/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/984/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/984/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/984/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">Aug. 8, 2023, 1:50 p.m.</td>
                        <td class="align-middle">Shehu, Hadiza Umar [CID010078]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                paracetamol (1g)

                            </span>

                            <span class="badge badge-lg bg-primary mb-1">

                                Amoxil Beecham imox (500mg)

                            </span>


                        </td>
                        <td class="align-middle">Isah Shehu</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/983/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/983/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/983/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/983/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">July 26, 2023, 9:57 a.m.</td>
                        <td class="align-middle">Yahaya, Fatima [CID015662]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Amoxicillin

                            </span>

                            <span class="badge badge-lg bg-primary mb-1">

                                Chlopheniramine Maleate

                            </span>


                        </td>
                        <td class="align-middle">Abdul Baba</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/982/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/982/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/982/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/982/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">June 9, 2023, 3:09 p.m.</td>
                        <td class="align-middle">Demo, Dome Patient [CID013997]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Amoxicillin

                            </span>


                        </td>
                        <td class="align-middle">Abbas Nagwari</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/978/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/978/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/978/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/978/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle text-nowrap">April 11, 2023, 10:55 a.m.</td>
                        <td class="align-middle">Aliyu, Rabi [CID011539]</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                Furosemide

                            </span>


                        </td>
                        <td class="align-middle">Isah Shehu</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/977/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/977/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/977/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/977/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody><!-- /tbody -->
            </table><!-- /.table -->
            <hr class="my-2">


            <div class="d-flex justify-content-around">

                <ul class="pagination">

                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:"><span class="oi oi-arrow-left"></span> Previous</a>
                    </li>


                    <li class="page-item active">

                        <span class="page-link" href="javascript:"> 1 - 10 of 128</span>
                    </li>


                    <li class="page-item">
                        <a class="page-link" href="javascript:" data-page="2"
                            data-href="?status=pending&amp;page=2">Next <span class="oi oi-arrow-right"></span></a>
                    </li>

                </ul>
                <input type="hidden" class="sr-only filter" name="page" value="1">

            </div>


        </div><!-- /.table-responsive -->
    </div>
@endsection
