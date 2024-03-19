@extends('layouts/layoutMaster')

@section('title', 'Patients - Create Patient')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/highcharts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    {{--    <script src="{{asset('lib/jquery-3.4.1.min.js')}}"></script> --}}
    {{--    <script src="{{asset('lib/jquery-migrate-1.2.1.min.js')}}"></script> --}}
    {{--    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}"/> --}}
    {{--    <link href="{{asset('assets/font-awesome.min.css')}}" rel="stylesheet"> --}}
    {{--    <link rel="stylesheet" href="{{asset('dist/drawerJs.css')}}"/> --}}
    {{--    <script src="{{asset('dist/drawerJs.standalone.js')}}"></script> --}}
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
    {{-- <script src="{{ asset('assets/code/highcharts.js') }}"></script>
    <script src="{{ asset('assets/code/modules/series-label.js') }}"></script>
    <script src="{{ asset('assets/code/modules/exporting.js') }}"></script>
    <script src="{{ asset('assets/code/modules/export-data.js') }}"></script>
    <script src="{{ asset('assets/code/modules/accessibility.js') }}"></script> --}}
    <script src="{{ asset('assets/js/forms-editors.js') }}"></script>

@endsection

@section('content')
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
                            data-bs-target="#navs-pills-justified-radiology" aria-controls="navs-pills-justified-radiology"
                            aria-selected="false" tabindex="-1">
                            <i class="tf-icons ti ti-photo ti-xs me-1"></i> Radiology Requests
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
                            <i class="tf-icons ti ti-prescription ti-xs me-1"></i> Imaging
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
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-vitals-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <div class="row">
                            <div class="col-md-6">
                                {!! $chart->container() !!}
                            </div>
                            <script src="{{ $chart->cdn() }}"></script>
                            {{ $chart->script() }}

                        </div>
                        @include('_partials._modals.modal-new-vitals')

                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-va" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-va-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <div class="row">
                            <div class="col-md12">

                            </div>
                        </div>
                        @include('_partials._modals.modal-new-va')
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-allergies" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-allergies-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:allergies />
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-diagnosis" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <livewire:diagnoses />
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-lab" role="tabpanel">
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-lab-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">

                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <div class="thead-dd dropdown">
                                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox"
                                                style="top:unset!important;margin-top: 0.2em!important;">
                                                <input title="" type="checkbox" id="lab-select-all"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="lab-select-all"></label>
                                            </div>
                                            <div class="thead-btn" role="button" data-toggle="dropdown"
                                                data-boundary="document" aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </div>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-arrow"></div>
                                                <a class="dropdown-item" href="javascript:" id="item-select-all">Select
                                                    all</a>
                                                <a class="dropdown-item" href="javascript:"
                                                    id="item-unselect-all">Unselect all</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:"
                                                    id="grouped-lab-result-print-btn">Grouped Print Result</a>
                                            </div>
                                        </div>

                                    </th>
                                    <th>Date of Request</th>
                                    <th>Service</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>---</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
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
                        <a href="" data-bs-toggle="modal" data-bs-target="#new-diagnosis-modal"
                            class="btn btn-primary mb-2 float-end">New Entry</a>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Service</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>---</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
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
    <script>
        var localization_ru = {
            'Add Drawer': 'Добавить холст для рисования',
            'Insert Drawer': 'Добавить холст',
            'Insert': 'Добавить',
            'Free drawing mode': 'Карандаш',
            'SimpleWhiteEraser': 'Ластик (белый)',
            'Eraser': 'Ластик',
            'Delete this canvas': 'Удалить полотно',
            'Are you sure want to delete this canvas?': 'Вы уверены что хотите удалить полотно?',


            // canvas properties popup
            'Size (px)': 'Размер (px)',
            'Position': 'Позиция',
            'Inline': 'На линии',
            'Left': 'Слева',
            'Center': 'По центру',
            'Right': 'Справа',
            'Floating': 'Плавающий',
            'Canvas properties': 'Свойства холста',
            'Background': 'Фон',
            'transparent': 'прозрачный',
            'Cancel': 'Отмена',
            'Save': 'Сохранить',

            // Fullscreen plugin
            'Enter fullscreen mode': 'Полноэкранный режим',
            'Exit fullscreen mode': 'Выйти из полноэкранного режима',

            // shape context menu plugin
            'Bring forward': 'Переместить выше',
            'Send backwards': 'Переместить ниже',
            'Bring to front': 'Переместить наверх',
            'Send to back': 'Переместить в низ',
            'Duplicate': 'Клонировать',
            'Remove': 'Удалить',

            // brush size plugin
            'Size:': 'Размер:',

            // color plugin
            'Fill:': 'Заливка:',
            'Transparent': 'Прозрачный',
            'None': 'Нет',

            // shape border plugin
            'Border:': 'Граница:',

            // arrow plugin
            'Draw an arrow': 'Стрелка',
            'Draw a two-sided arrow': 'Двухсторонняя стрелка',
            'Lines and arrows': 'Линии и стрелки',

            // circle plugin
            'Draw a circle': 'Круг',

            // line plugin
            'Draw a line': 'Линия',

            // rectangle plugin
            'Draw a rectangle': 'Прямоугольник',

            // triangle plugin
            'Draw a triangle': 'Треугольник',

            // polygon plugin
            'Draw a Polygon': 'Многоугольник',
            'Stop drawing a polygon': 'Закончить рисование многоугольника (esc)',
            'Click to start a new line': 'Кликните для начала новой линии',

            // text plugin
            'Draw a text': 'Текст',
            'Click to place a text': 'Нажмите, чтобы расположить текст',
            'Font:': 'Шрифт:',

            // movable floating mode plugin
            'Move canvas': 'Подвинуть холст',

            // base shape
            'Click to start drawing a ': 'Нажмите, чтобы начать рисовать ',

            // image tool
            'Insert an image': 'Вставить изображение',
            'No file was selected!': 'Не был выбран файл!',
            'Incorrect file type': 'Неверный тип файла!',
            'File is to big!. Maximum file size is ': 'Файл слишком большой! Максимальный размер файла - ',
            'Image failed to create!': 'Не удалось создать изображение!',

            // background image tool
            'Insert a background image': 'Фоновое изображение'
        };

        $(document).ready(function() {
            var drawerPlugins = [
                // Drawing tools
                'Pencil',
                'Eraser',
                'Text',
                'Line',
                'ArrowOneSide',
                'ArrowTwoSide',
                'Triangle',
                'Rectangle',
                'Circle',
                'Image',
                'BackgroundImage',
                'Polygon',
                'ImageCrop',

                // Drawing options
                //'ColorHtml5',
                'Color',
                'ShapeBorder',
                'BrushSize',
                'OpacityOption',

                'LineWidth',
                'StrokeWidth',

                'Resize',
                'ShapeContextMenu',
                'CloseButton',
                'OvercanvasPopup',
                'OpenPopupButton',
                'MinimizeButton',
                'ToggleVisibilityButton',
                'MovableFloatingMode',
                'FullscreenModeButton',

                'TextLineHeight',
                'TextAlign',

                'TextFontFamily',
                'TextFontSize',
                'TextFontWeight',
                'TextFontStyle',
                'TextDecoration',
                'TextColor',
                'TextBackgroundColor'
            ];

            // drawer is created as global property solely for debug purposes.
            // doing  in production is considered as bad practice
            window.drawer = new DrawerJs.Drawer(null, {
                plugins: drawerPlugins,
                corePlugins: [
                    'Zoom' // use null here if you want to disable Zoom completely
                ],
                pluginsConfig: {
                    Image: {
                        scaleDownLargeImage: true,
                        maxImageSizeKb: 10240, //1MB
                        cropIsActive: true
                    },
                    BackgroundImage: {
                        scaleDownLargeImage: true,
                        maxImageSizeKb: 10240, //1MB
                        //fixedBackgroundUrl: '/examples/redactor/images/vanGogh.jpg',
                        imagePosition: 'center', // one of  'center', 'stretch', 'top-left', 'top-right', 'bottom-left', 'bottom-right'
                        acceptedMIMETypes: ['image/jpeg', 'image/png', 'image/gif'],
                        dynamicRepositionImage: true,
                        dynamicRepositionImageThrottle: 100,
                        cropIsActive: false
                    },
                    Text: {
                        editIconMode: false,
                        editIconSize: 'large',
                        defaultValues: {
                            fontSize: 72,
                            lineHeight: 2,
                            textFontWeight: 'bold'
                        },
                        predefined: {
                            fontSize: [8, 12, 14, 16, 32, 40, 72],
                            lineHeight: [1, 2, 3, 4, 6]
                        }
                    },
                    Zoom: {
                        enabled: true,
                        showZoomTooltip: true,
                        useWheelEvents: true,
                        zoomStep: 1.05,
                        defaultZoom: 1,
                        maxZoom: 32,
                        minZoom: 1,
                        smoothnessOfWheel: 0,
                        //Moving:
                        enableMove: true,
                        enableWhenNoActiveTool: true,
                        enableButton: true
                    }
                },
                toolbars: {
                    drawingTools: {
                        position: 'top',
                        positionType: 'outside',
                        customAnchorSelector: '#custom-toolbar-here',
                        compactType: 'scrollable',
                        hidden: false,
                        toggleVisibilityButton: false,
                        fullscreenMode: {
                            position: 'top',
                            hidden: false,
                            toggleVisibilityButton: false
                        }
                    },
                    toolOptions: {
                        position: 'bottom',
                        positionType: 'inside',
                        compactType: 'popup',
                        hidden: false,
                        toggleVisibilityButton: false,
                        fullscreenMode: {
                            position: 'bottom',
                            compactType: 'popup',
                            hidden: false,
                            toggleVisibilityButton: false
                        }
                    },
                    settings: {
                        position: 'right',
                        positionType: 'inside',
                        compactType: 'scrollable',
                        hidden: false,
                        toggleVisibilityButton: false,
                        fullscreenMode: {
                            position: 'right',
                            hidden: false,
                            toggleVisibilityButton: false
                        }
                    }
                },
                defaultImageUrl: '/examples/redactor/images/drawer.jpg',
                defaultActivePlugin: {
                    name: 'Pencil',
                    mode: 'lastUsed'
                },
                debug: true,
                activeColor: '#a1be13',
                transparentBackground: true,
                align: 'floating', //one of 'left', 'right', 'center', 'inline', 'floating'
                lineAngleTooltip: {
                    enabled: true,
                    color: 'blue',
                    fontSize: 15
                }
            }, 400, 400);

            $('#canvas-editor').append(window.drawer.getHtml());
            window.drawer.onInsert();
        });
    </script>
@endsection
