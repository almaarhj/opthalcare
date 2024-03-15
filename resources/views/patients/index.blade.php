@extends('layouts/layoutMaster')

@section('title', 'Patients')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}">
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <!-- Flat Picker -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

{{-- @section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection --}}

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">App /</span> Patients
    </h4>

    <!-- DataTable with Buttons -->
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">

        <div class="card-title mb-0">
          <input type="text" class="form-control" placeholder="Search Patients">
        </div>

          <a href="{{route('app.patients.create')}}" class="btn btn-label-primary waves-effect" >
            New Patient
          </a>


      </div>
        <div class="card-datatable table-responsive pt-0">
            <livewire:patients />
        </div>
    </div>
    <!--/ DataTable with Buttons -->
    <script>
    @if(session()->has('check-in'))
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          customClass: {
            confirmButton: 'btn btn-primary me-3',
            cancelButton: 'btn btn-label-secondary'
          },
          buttonsStyling: false
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('delete#' + this.getAttribute('data-value')).submit();
          }
        })
    @endif
    </script>
@endsection
