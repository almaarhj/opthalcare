@extends('layouts/layoutMaster')

@section('title', 'Radiology Request')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fullcalendar/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
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
                    value="I6V9Ayat3Gd9no5EDsXlVMuj7gjAuzMJ2SjPgxr3htkCfkjJ3H773jgpvYNclBNJ">
                <div class="form-group flex-fill">
                    <label class="" for="patient_id">Filter By Patient</label>
                    <select id="patient_id" name="patient_id" class="form-control disabled filter select2-hidden-accessible"
                        data-placeholder="Filter by Patient" data-select2-id="patient_id" tabindex="-1"
                        aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                        dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-labelledby="select2-patient_id-container"><span
                                    class="select2-selection__rendered" id="select2-patient_id-container" role="textbox"
                                    aria-readonly="true"><span class="select2-selection__placeholder">Filter by
                                        Patient</span></span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
                <div class="form-group flex-fill ml-2">
                    <label class="" for="location_id">Filter By Location</label>
                    <select id="location_id" name="location_id" class="custom-select form-control filter">
                        <option value="">- All -</option>

                        <option value="2">SOKOTO CENTRE</option>

                    </select>
                </div>
                <div class="form-group flex-fill ml-2">
                    <label class="" for="category_id">Filter By Category</label>
                    <select id="category_id" name="category_id" class="custom-select form-control filter">
                        <option value="">- All -</option>

                        <option value="4">CT</option>

                        <option value="3">ECG</option>

                        <option value="10">ECHOCARDIOGRAPHY</option>

                        <option value="8">EEG</option>

                        <option value="7">ENDOSCOPY</option>

                        <option value="12">LP WITH CSF PRESSURE MONITORING</option>

                        <option value="9">MAMMOGRAPHY</option>

                        <option value="11">MEDICAL REPORT</option>

                        <option value="5">MRI</option>

                        <option value="6">SPECIAL PROCEDURES</option>

                        <option value="2">ULTRASOUND</option>

                        <option value="1">X-RAY</option>

                    </select>
                </div>
                <div class="form-group flex-fill ml-2">
                    <input type="hidden" name="start" class="filter sr-only">
                    <input type="hidden" name="stop" class="filter sr-only">
                    <label for="reportrange">Filter By Request Date</label>
                    <div id="reportrange" class="form-control d-flex custom-select">
                        <i class="mt-1 fa fa-calendar"></i>&nbsp;
                        <span>12/14/2023 - 12/14/2023</span>
                    </div>
                </div>
            </form>
        </div><!-- /.card-header -->
        <!-- .table-responsive -->
        <div class="table-responsive">
            <!-- .table -->
            <table class="table table-striped">
                <!-- thead -->
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Patient</th>
                        <th>Investigation</th>
                        <th>Requester</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tr -->

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 6 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22393">Abdulrahman, Usman [CID022393]</a>
                        </td>
                        <td class="align-middle">
                            Cranial Cervical CT with Contrast
                        </td>
                        <td class="align-middle">BALKISU M YAKUBU</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26808/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26808/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:42 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22391">Muhammad, Tukur [CID022391]</a>
                        </td>
                        <td class="align-middle">
                            BRAIN CT (With Contrast)
                        </td>
                        <td class="align-middle">BALKISU M YAKUBU</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26806/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26806/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:39 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22390">Hamid, Zainab [CID022390]</a>
                        </td>
                        <td class="align-middle">
                            Both Ankle Xray
                        </td>
                        <td class="align-middle">BALKISU M YAKUBU</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26805/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26805/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:33 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22389">Alhaji, Umar [CID022389]</a>
                        </td>
                        <td class="align-middle">
                            CT Contrast (Neck)
                        </td>
                        <td class="align-middle">BALKISU M YAKUBU</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26804/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26804/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:14 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/21135">Dahiru, Muhammad Gazobi [CID021135]</a>
                        </td>
                        <td class="align-middle">
                            Shoulder X-ray (AP and Lateral)
                        </td>
                        <td class="align-middle">BALKISU M YAKUBU</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26803/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26803/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:01 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22383">Mai Gandi, Mustapha [CID022383]</a>
                        </td>
                        <td class="align-middle">
                            Abdomino-Pelvic Ultrasound
                        </td>
                        <td class="align-middle">Dr. Halimat Hassan Amin</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item has-outstanding-prepaid" type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26801/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:01 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22383">Mai Gandi, Mustapha [CID022383]</a>
                        </td>
                        <td class="align-middle">
                            Lumbosacral CT SCAN
                        </td>
                        <td class="align-middle">Dr. Halimat Hassan Amin</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item has-outstanding-prepaid" type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26800/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 5:01 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22383">Mai Gandi, Mustapha [CID022383]</a>
                        </td>
                        <td class="align-middle">
                            Cervical X-ray
                        </td>
                        <td class="align-middle">Dr. Halimat Hassan Amin</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item has-outstanding-prepaid" type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26799/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 4:42 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22386">Suleiman, Bello [CID022386]</a>
                        </td>
                        <td class="align-middle">
                            Thoraco-Lumba (Spine) Xray
                        </td>
                        <td class="align-middle">Hadiza Hassan</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26795/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26795/cancel">
                                        Cancel Request
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">Dec. 14, 2023, 4:41 p.m.</td>
                        <td class="align-middle">
                            <a target="_blank" href="/patient/22386">Suleiman, Bello [CID022386]</a>
                        </td>
                        <td class="align-middle">
                            Lumbo-Sacral Spine MRI
                        </td>
                        <td class="align-middle">Hadiza Hassan</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">




                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26794/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>


                                    <button class="dropdown-item cancel-request" type="button" data-toggle="question"
                                        data-question="Cancel Request?" data-remote="/radiology/requests/26794/cancel">
                                        Cancel Request
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

                        <span class="page-link" href="javascript:"> 1 - 10 of 3,296</span>
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
