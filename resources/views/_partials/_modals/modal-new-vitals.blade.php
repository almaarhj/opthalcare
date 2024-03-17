<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="new-vitals-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Record Vital Signs for
                        {{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname }}
                    </h3>
                </div>
                <form wire:submit.prevent="updateAntenatal" class="row g-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Record Vital Signs
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="vitalSignsTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Parameter</th>
                                                <th scope="col">Value</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <select class="form-select" aria-label="Parameter">
                                                        <option value="">---------</option>
                                                        <option value="20">Temperature</option>
                                                        <option value="16" selected>Pulse</option>
                                                        <option value="22">Weight</option>
                                                        <option value="3">Blood Pressure</option>
                                                        <option value="6">Fundus Height</option>
                                                        <option value="7">Glucose</option>
                                                        <option value="8">Head Circumference</option>
                                                        <option value="9">Height</option>
                                                        <option value="10">Length of Arm</option>
                                                        <option value="11">MUAC</option>
                                                        <option value="12">Mid-Arm Circumference</option>
                                                        <option value="13">PCV</option>
                                                        <option value="14">Pain Scale</option>
                                                        <option value="15">Protein</option>
                                                        <option value="17">Respiration</option>
                                                        <option value="18">SpO2</option>
                                                        <option value="19">Surface Area</option>
                                                        <option value="21">Urine</option>
                                                        <option value="1">BMI</option>
                                                        <option value="23">EWS</option>
                                                        <option value="2">BSA</option>
                                                        <option value="4">Dilation</option>
                                                        <option value="5">Fetal Heart Rate</option>
                                                    </select>
                                                </th>
                                                <td><input type="text" class="form-control"></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm delete-row">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-primary mt-2" id="addMoreBtn">Add More Reading</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                       
                        $('#addMoreBtn').click(function() {
                            var newRow = $('<tr></tr>');
                            newRow.append('<th><select class="form-select" aria-label="Parameter"><option value="">---------</option><option value="20">Temperature</option><option value="16">Pulse</option><option value="22">Weight</option><option value="3">Blood Pressure</option><option value="6">Fundus Height</option><option value="7">Glucose</option><option value="8">Head Circumference</option><option value="9">Height</option><option value="10">Length of Arm</option><option value="11">MUAC</option><option value="12">Mid-Arm Circumference</option><option value="13">PCV</option><option value="14">Pain Scale</option><option value="15">Protein</option><option value="17">Respiration</option><option value="18">SpO2</option><option value="19">Surface Area</option><option value="21">Urine</option><option value="1">BMI</option><option value="23">EWS</option><option value="2">BSA</option><option value="4">Dilation</option><option value="5">Fetal Heart Rate</option></select></th>');
                            newRow.append('<td><input type="text" class="form-control"></td>');
                            newRow.append('<td><button type="button" class="btn btn-danger btn-sm delete-row"><span aria-hidden="true">&times;</span></button></td>');
                            $('#vitalSignsTable tbody').append(newRow);
                        });
                
                        
                        $(document).on('click', '.delete-row', function() {
                             $(this).closest('tr').remove();
                        });
                    });
                </script>
                    
                         
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-secondary text-black">Close</button>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
