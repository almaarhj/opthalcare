<div>
    <div class="row g-4">
        @foreach ($patients as $patient)
            <div class="col-xl-3 col-lg-4 ml-2 col-sm-6 p-4"><!-- .card -->
                <div class="card card-figure is-hoverable"><!-- .card-figure -->
                    <figure class="figure"><!-- .figure-img -->
                        <div class="figure-img d-flex justify-content-between" style="overflow: unset">
                            <div href="javascript:" class="user-avatar user-avatar-xl"><img
                                    src="{{ $patient->gender == 'Male' ? asset('assets/img/user-male-circle.png') : asset('assets/img/user-female-circle.png') }}"
                                    alt=""></div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="topCourses" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses"
                                    style="">
                                    <a class="dropdown-item" href="{{ route('app.patients.show', $patient->id) }}">Open
                                        Profile</a>
                                    <a class="dropdown-item" href="{{ route('app.patients.edit', $patient->id) }}">Edit
                                        Profile</a>
                                    <a class="dropdown-item"
                                        href="{{ route('app.patient.checkIn', $patient->id) }}">Check In</a>
                                    <a class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#schedule-appointment{{ $patient->id }}">Schedule
                                        Appointment</a>
                                    <a class="dropdown-item text-bg-danger" href="javascript:void(0);">Delete
                                        Profile</a>
                                </div>
                            </div>
                        </div><!-- /.figure-img --><!-- .figure-caption -->
                        <figcaption class="figure-caption">
                            <h6 class="figure-title" style="white-space: normal;"><a
                                    href="">{{ $patient->user->firstname . ' ' . $patient->user->middlename . ' ' . $patient->user->lastname }}
                                    [{{ app(App\Settings\SystemSettings::class)->number_prefix ?: 'HRN' }}{{ $patient->hospital_no }}]</a>
                            </h6>
                            <p class="text-muted mb-0">{{ $patient->gender }}, {{ $patient->getAge() }}</p>
                            <p class="text-muted mb-0">{{ $patient->user->phone }}</p>
                            <p class="text-muted mb-0"><span class="badge badge-dark" data-toggle="tooltip"
                                    data-original-title="Payment Plan">WALK-IN PATIENT - Self Pay</span></p>
                        </figcaption><!-- /.figure-caption -->
                    </figure><!-- /.card-figure -->
                </div><!-- /.card -->
            </div>
            @include('_partials._modals.modal-schedule-appointment')
        @endforeach
    </div>
</div>
