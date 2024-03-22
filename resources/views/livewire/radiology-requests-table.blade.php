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

                      @foreach ($radiologyCategories as $category  )
                        <option value="{{$category->id}}">{{$category->name}}</option>

                      @endforeach
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
          @foreach ( $radiologyRequests as $radiologyRequest )
                     <tr>
                        <td class="align-middle">{{Carbon\Carbon::parse($radiologyRequest->created_at)->isoFormat('MMM. D, YYYY, h a')}}</td>
                        <td class="align-middle">
                            <a target="_blank" href="/app/patient/{{$radiologyRequest->patient->id}}">{{$radiologyRequest->patient->user_id}} [{{$radiologyRequest->patient->hospital_no}}]</a>
                        </td>
                        <td class="align-middle">
                          {{$radiologyRequest->request_note}}
                        </td>
                        <td class="align-middle"> {{$radiologyRequest->user->firstname}} {{$radiologyRequest->user->lastname}}</td>
                        <td class="align-middle text-right">
                           <div class="dropdown">
                                <button class="btn btn-sm btn-icon btn-light p-0" type="button" id="topCourses" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses"
                                    style="">
                                        <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/radiology/requests/26808/notes/add" data-target="#newRequestModal"
                                        type="button">
                                        Add Findings/Notes
                                    </button>

                                    <a class="dropdown-item cancel-request" wire:click="cancelRequest({{ $radiologyRequest->id }})" type="button" data-toggle="question"
                                        data-question="Cancel Request?" >
                                        Cancel Request
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
            @endforeach


                </tbody><!-- /tbody -->
            </table><!-- /.table -->
            <hr class="my-2">


            <div class="d-flex justify-content-around">
               {{ $radiologyRequests->links('shared.custom-pagination') }}
                <input type="hidden" class="sr-only filter" name="page" value="1">

            </div>

        </div>
