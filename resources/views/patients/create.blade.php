@extends('layouts/layoutMaster')

@section('title', 'Patients - Create Patient')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Patients/</span> Create Patient</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Patient</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('app.patients.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label" for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control"
                                    placeholder="First Name">
                            </div>
                            <div class="col-md-4">

                                <label class="form-label" for="middlename">Middle Name</label>
                                <input type="text" name="middlename" id="middlename" class="form-control"
                                    placeholder="Midddle Name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control"
                                    placeholder="Last Name">
                            </div>
                            <div class="col-md-4">

                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Phone">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="gender">Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="" selected>Select Gender...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="date_of_birth" class="form-label"> Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="religion_id">Religion</label>
                                <select name="religion_id" id="religion_id" class="form-control">
                                    <option value="" selected>Select Religion...</option>
                                    @foreach ($religions as $religion)
                                        <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="marital_status">Marital Status</label>
                                <select name="marital_status" id="marital_status" class="form-control">
                                    <option value="" selected>Select Marital Status...</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Occupation</label>
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation">
                            </div>
                            <div class="col-md-4">
                                <label for="state_r" class="form-label">State of Residence</label>
                                <select name="state_of_residence" id="state_r" class="form-control">
                                    <option value="" selected>Select State...</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="lga_r" class="form-label">LGA</label>
                                <select name="lga_of_residence" id="lga_r" class="form-control"></select>
                            </div>
                            <div class="col-md-12">
                                <label for="residential_address" class="form-label">Residential Address </label>
                                <textarea name="residential_address" id="residential_address" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="state_o" class="form-label">State of Origin</label>
                                <select name="state_of_origin" id="state_o" class="form-control">
                                    <option value="" selected>Select State...</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="lga_o" class="form-label">LGA</label>
                                <select name="lga_of_origin" id="lga_o" class="form-control"></select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="nok_name">Next of Kin's Name </label>
                                <input type="text" name="next_of_kin_name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="nok_relation">Next of Kin's Relationship </label>
                                <select name="next_of_kin_relation" id="nok_relation" class="form-control">
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Husband">Husband</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="nok_phone" class="form-label">Next of Kin's Phone</label>
                                <input type="text" name="next_of_kin_phone" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="nok_address" class="form-label">Next of Kin's Address </label>
                                <textarea name="next_of_kin_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4">

                                <label class="form-label" for="hmo_plan">HMO Plan </label>
                                <select name="hmo_id" id="" class="form-control">
                                    <option value="" selected>Select HMO Plan...</option>
                                    @foreach ($hmos as $hmo)
                                        <option value="{{ $hmo->id }}">{{ $hmo->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">

                                <label class="form-label" for="hmo_depend">Dependent? </label>
                                <select name="dependent" id="hmo_depend" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4">

                                <label class="form-label" for="principal_id">Principal ID</label>
                                <input type="text" name="principal_id" id="principal_id" class="form-control"
                                    placeholder="HMO Principal ID">
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sumbit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        const state_r = document.getElementById('state_r');
        const lga_r = document.getElementById('lga_r');

        state_r.addEventListener('change', () => {
            var state_value = state_r.value;

            fetch('/getLGA/' + state_value)
                .then((res) => res.json())
                .then(data => {
                    console.log(data);
                    lga_r.length = 0;

                    let defaultOption = document.createElement('option');
                    defaultOption.text = 'Choose LGA';

                    lga_r.add(defaultOption);
                    lga_r.selectedIndex = 0;

                    document.getElementById("lga_r").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga_r.add(option);
                    }
                })
                .catch(error => {
                    console.log(error);
                });

        });


        const state_o = document.getElementById('state_o');
        const lga_o = document.getElementById('lga_o');

        state_o.addEventListener('change', () => {
            var state_value = state_o.value;

            fetch('/getLGA/' + state_value)
                .then((res) => res.json())
                .then(data => {
                    console.log(data);
                    lga_o.length = 0;

                    let defaultOption = document.createElement('option');
                    defaultOption.text = 'Choose LGA';

                    lga_o.add(defaultOption);
                    lga_o.selectedIndex = 0;

                    document.getElementById("lga_o").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga_o.add(option);
                    }
                })
                .catch(error => {
                    console.log(error);
                });

        });
    </script>

@endsection
