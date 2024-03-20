<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="new-va-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Record Vision Acuity Test for
                        {{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname }}
                    </h3>
                </div>
                <form action="{{ route('app.vision-acuity.store') }}" method="POST" class="row g-3">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{ request()->route()->patient->id }}">
                    <div class="col-12 col-md-12">
                        <label class="form-label"> LEFT (OS)</label>
                        <input type="number" name="left_os" class="form-control" placeholder="LEFT (OS)" />
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label"> RIGHT (OD)</label>
                        <input type="number" name="right_od" class="form-control" placeholder="RIGHT (OD)" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close"
                            class="btn btn-secondary text-black">Close</button>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
