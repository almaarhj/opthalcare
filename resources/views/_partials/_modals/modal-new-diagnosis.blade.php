<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="new-diagnosis-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">New Diagnosis for
                        {{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname }}
                    </h3>
                </div>

                <form id="diagnosis-form" action="{{ route('app.diagnosis.store') }}" method="POST">
                    @csrf <!-- Add CSRF protection for Laravel -->
                    <div class="col-12 col-md-12">
                        <label class="form-label">Patient</label>
                        <input type="text" class="form-control"
                            value="{{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname . ' ' . \App\Models\Patient::find(request()->route()->patient->id)->middlename . ' ' . \App\Models\Patient::find(request()->route()->patient->id)->user->lastname }}"
                            readonly disabled>
                        <input type="hidden" name="patient_id" class="form-control"
                            value="{{ request()->route()->patient->id }}">
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label">Case Description</label>
                        <select name="icd_id" class="form-control">
                            @foreach (\App\Models\ICD10::all() as $icd)
                                <option value="{{ $icd->id }}">({{ $icd->number }}) {{ $icd->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" id="sketch" name="sketch">
                    <div class="col-12 col-md-12">
                        <label class="form-label">Comments</label>
                        <textarea name="comments" id="editor" class="form-control" rows="5" placeholder="Type Comments here..."></textarea>
                        <iframe id="drawing" class="col-md-12"
                            src="{{ route('app.patient.draw', request()->route()->patient->id) }}">Your
                            browser isn't
                            compatible</iframe>
                    </div>
                    <!-- Additional fields or inputs can be added here -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <a href="" class="btn btn-label-secondary" target="_blank">Draw</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
<script src="{{ asset('jquery.min.js') }}"></script>
<!-- easy editor core js -->
<script src="{{ asset('jquery.easyeditor.js') }}"></script>
<!-- SweetAlert -->

<script>
    jQuery(document).ready(function($) {
        new EasyEditor('#editor');
    });

    // Handle form submission
    $('#diagnosis-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        var base64 = $('#drawing').contents().find('#sketch').val();
        $('#sketch').val(base64);

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: $(this).attr('action'), // Laravel route URL
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log(response);
                // Dismiss modal
                $('#new-diagnosis-modal').modal('hide');
                // Show SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Diagnosis submitted successfully!',
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
                // Show SweetAlert for error
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An error occurred while submitting the form. Please try again.',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
</script>
