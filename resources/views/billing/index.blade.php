@extends('layouts/layoutMaster')

@section('title', 'Waiting List')

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
        <form method="post" class="filterForm">
            <input type="hidden" name="csrfmiddlewaretoken"
                value="p3D69NIOpSei7GV6z8TZmMLraHmG81mNukzBFp6rA7r6V4VmqOTK9XrWEw8ZyQSP">
            <div class="card-header d-flex justify-content-between">
                <div class="form-group flex-fill">
                    <label class="" for="branch_id">Filter By Branch</label>
                    <select name="branch_id" id="branch_id" class="form-control filter select2-hidden-accessible"
                        data-placeholder="Filter by Branch" data-select2-id="branch_id" tabindex="-1"
                        aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                        dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-labelledby="select2-branch_id-container"><span
                                    class="select2-selection__rendered" id="select2-branch_id-container" role="textbox"
                                    aria-readonly="true"><span class="select2-selection__placeholder">Filter by
                                        Branch</span></span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
                <div class="form-group flex-fill ml-2">
                    <label class="" for="patient_id">Filter By Patient</label>
                    <select name="patient_id" id="patient_id" class="form-control filter select2-hidden-accessible"
                        data-placeholder="Filter by Patient" data-select2-id="patient_id" tabindex="-1"
                        aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                        dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-labelledby="select2-patient_id-container"><span
                                    class="select2-selection__rendered" id="select2-patient_id-container" role="textbox"
                                    aria-readonly="true"><span class="select2-selection__placeholder">Filter by
                                        Patient</span></span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
                <div class="form-group flex-fill ml-2">
                    <label class="" for="plan_id">Filter By Insurance Plan</label>
                    <select name="plan_id" id="plan_id" class="form-control filter select2-hidden-accessible"
                        data-placeholder="Filter by Insurance Plan" data-select2-id="plan_id" tabindex="-1"
                        aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                        dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-labelledby="select2-plan_id-container"><span
                                    class="select2-selection__rendered" id="select2-plan_id-container" role="textbox"
                                    aria-readonly="true"><span class="select2-selection__placeholder">Filter by Insurance
                                        Plan</span></span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </form>
        <!-- /.card-header -->
        <!-- .table-responsive -->
        <div class="table-responsive">
            <!-- .table -->
            <table class="table">
                <!-- thead -->
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Primary Insurance Plan</th>
                        <th class="text-right">Outstanding Amount</th>
                        <th class="align-middle text-right">*</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tr -->

                    <tr>
                        <td class="align-middle"><a href="/patient/4010">Gidado, Wasila [CID004010]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-4010-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/4009">Abubakar, Musa [CID004009]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">1,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-4009-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/4006">Shuangsheng, Zheng [CID004006]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-4006-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/4002">Hajiya Luba, Garba [CID004002]</a></td>
                        <td>PRIVATE - Self Pay</td>
                        <td class="text-right">71,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-4002-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3999">Bello, Hasana Bulaki [CID003999]</a></td>
                        <td>PRIVATE - Self Pay</td>
                        <td class="text-right">37,850.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3999-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3994">Sofore, Christopher [CID003994]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3994-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3991">Muhammad, Ibrahim [CID003991]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3991-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3978">Khadijat, Omokhefue Umoru [CID003978]</a></td>
                        <td>PRIVATE - Self Pay</td>
                        <td class="text-right">6,200.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3978-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3971">Abubakar, Aishatu [CID003971]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3971-payment?bills=">
                                        Receive Payment
                                    </button>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle"><a href="/patient/3970">Bello, Aishatu Muhammad [CID003970]</a></td>
                        <td>Gombe Private - Self Pay</td>
                        <td class="text-right">2,000.00</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <button class="dropdown-item" type="button" data-toggle="modal"
                                        data-target="#global-modal-sm" data-remote="/billing/patient-3970-payment?bills=">
                                        Receive Payment
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

                        <span class="page-link" href="javascript:"> 1 - 10 of 492</span>
                    </li>


                    <li class="page-item">
                        <a class="page-link" href="javascript:" data-page="2" data-href="?page=2">Next <span
                                class="oi oi-arrow-right"></span></a>
                    </li>

                </ul>
                <input type="hidden" class="sr-only filter" name="page" value="1">

            </div>


        </div><!-- /.table-responsive -->

    </div>
@endsection
