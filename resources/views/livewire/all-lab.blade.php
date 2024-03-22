 <!-- .card-header -->
 <div class="card-header">
    <form class="filterForm d-flex justify-content-between">
        <input type="hidden" name="csrfmiddlewaretoken"
            value="yu2PugvM8gdZZBwSYkXm1bnSZ7ttQ5MlQ0QMcJjeCOGB0sv2xho6VCFHykIDPEh9">
        <div class="form-group flex-fill">
            <label class="" for="patient_id">Filter By Patient</label>
            <select name="patient_id" id="patient_id" class="filter select2-hidden-accessible"
                data-placeholder="Filter By Patient" data-select2-id="patient_id" tabindex="-1"
                aria-hidden="true"></select><span class="select2 select2-container select2-container--default"
                dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span
                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0" aria-labelledby="select2-patient_id-container"><span
                            class="select2-selection__rendered" id="select2-patient_id-container" role="textbox"
                            aria-readonly="true"><span class="select2-selection__placeholder">Filter By
                                Patient</span></span><span class="select2-selection__arrow" role="presentation"><b
                                role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                    aria-hidden="true"></span></span>
        </div>
        <div class="form-group flex-fill ml-2">
            <label class="" for="location_id">Filter By Status</label>
            <select id="location_id" name="location_id" class="custom-select form-control filter">
                <option value="">- All -</option>

                <option value="16">Pending</option>

            </select>
        </div>
        <div class="form-group flex-fill ml-2">
            <label class="" for="id_category">Filter By Category</label>
            <select id="id_category" name="category_id" class="custom-select form-control filter">
                <option value="">- All -</option>

                <option value="22">ALLERGY</option>

                <option value="35">ANDROLOGY</option>

                <option value="40">BLOOD</option>

                <option value="18">BONE TURNOVER</option>

                <option value="36">CHEMISTRY</option>

                <option value="14">COAGULATION</option>

                <option value="28">CSF</option>

                <option value="27">CYTOGENETICS</option>

                <option value="25">CYTOLOGY</option>

                <option value="41">FERTILITY HORMOES</option>

                <option value="30">FLOW CYTOMETRY</option>

                <option value="5">GENERAL CHEMISTRY/KIDNEY</option>

                <option value="1">GENERAL ENDOCRINE</option>

                <option value="2">GLUCOSE METABOLISM</option>

                <option value="13">HAEMATOLOGY</option>

                <option value="21">HEART/MUSCLE</option>

                <option value="37">HEMATOLOGY</option>

                <option value="19">HISTOLOGY (LARGE BIOPSIES)</option>

                <option value="16">HISTOLOGY (MEDIUM BIOPSIES)</option>

                <option value="4">HISTOLOGY (SMALL BIOPSIES)</option>

                <option value="23">HIV TESTS</option>

                <option value="24">HPLC DEPARTMENT</option>

                <option value="20">IMMUNOLOGY</option>

                <option value="29">IRON STUDIES</option>

                <option value="26">LIPID METABOLISM</option>

                <option value="10">LIVER/PANCREAS/GIT</option>

                <option value="17">MICROBIOLOGY</option>

                <option value="34">MOLECULAR BIOLOGY (PCR)</option>

                <option value="31">NUTRITION</option>

                <option value="38">PARASITOLOGY</option>

                <option value="7">PATERNITY</option>

                <option value="11">PHARMACOLOGY/TOXICOLOGY</option>

                <option value="15">PREGNANCY</option>

                <option value="42">PUS</option>

                <option value="6">SEROLOGY</option>

                <option value="12">SPECIAL HISTOLOGY</option>

                <option value="8">TB DEPARTMENT</option>

                <option value="32">THYROID</option>

                <option value="33">TISSUE TYPING</option>

                <option value="9">TUMOUR MARKERS</option>

                <option value="3">URINE</option>

                <option value="39">VIROLOGY/PCR</option>

            </select>
        </div>
        <div class="form-group flex-fill ml-2">
            <input type="hidden" name="start" class="filter sr-only">
            <input type="hidden" name="stop" class="filter sr-only">
            <label for="reportrange">Filter By Request Date</label>
            <div id="reportrange" class="form-control d-flex custom-select filter">
                <i class="mt-1 fa fa-calendar"></i>&nbsp;
                <span class="text-nowrap">12/7/2023 - 12/7/2023</span>
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
                <th>Lab Test</th>
                <th>Requester</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- tr -->

            @foreach ($labRequests as $labRequest)
            <tr>
                
                <td class="align-middle">{{ $labRequest->test->created_at }}</td>
                <td class="align-middle">
                    <a href="patients/{{ $labRequest->patient->id }}" target="_blank">
                        {{ $labRequest->patient->user->firstname }} {{ $labRequest->patient->user->lastname }}
                    </a>
                </td>
                {{-- {{ $labRequest->patient->id }} --}}
                <td class="align-middle">{{ $labRequest->test->name }}</td>
                <td class="align-middle">{{$labRequest->user->firstname.' '.$labRequest->user->lastname }}</td>
                <td class="align-middle">{{ $labRequest->status }}</td>
                <td class="align-middle text-right">
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                            data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                            <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                        <div class="dropdown-menu dropdown-menu-right">




                            <button class="dropdown-item has-outstanding-prepaid" type="button">
                                Receive Specimens
                            </button>



                            <button class="lab-request-action dropdown-item" data-toggle="question"
                                data-question="Cancel Lab Request?" data-remote="/lab/requests/30985/cancel"
                                type="button">
                                Cancel Request
                            </button>

                        </div>
                    </div>
                </td>
            </tr>

         
            @endforeach

        </tbody><!-- /tbody -->
    </table><!-- /.table -->
    <hr class="my-2">


    <div class="d-flex justify-content-around">

        <ul class="pagination">

            <li class="page-item disabled">
                <a class="page-link" href="javascript:"><span class="oi oi-arrow-left"></span> Previous</a>
            </li>


            <li class="page-item active">

                <span class="page-link" href="javascript:"> 1 - 10 of 1,295</span>
            </li>


            <li class="page-item">
                <a class="page-link" href="javascript:" data-page="2"
                    data-href="?status=pending&amp;page=2">Next <span class="oi oi-arrow-right"></span></a>
            </li>

        </ul>
        <input type="hidden" class="sr-only filter" name="page" value="1">

    </div>


</div><!-- /.table-responsive -->