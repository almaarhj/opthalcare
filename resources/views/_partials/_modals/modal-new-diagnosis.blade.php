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
                <form wire:submit.prevent="updateAntenatal" class="row g-3">
                    <div class="col-12 col-md-12">
                        <label class="form-label">Patient</label>
                        <input type="text" class="form-control"
                            value="{{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname . ' ' . \App\Models\Patient::find(request()->route()->patient->id)->middlename . ' ' . \App\Models\Patient::find(request()->route()->patient->id)->user->lastname }}"
                            readonly disabled>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label">Case Decrription</label>
                        <select name="" id="" class="form-control">
                            <option value="">(H00) Hordeomlum and chalazion</option>
                            <option value="">(H01) Other inflamation of eyelid</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label"> Comments</label>
                        <div id="full-editor">
                            <h6>Quill Rich Text Editor</h6>
                            <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                I love. </p>
                        </div>
                    </div>
                  <iframe src="{{route('app.patient.draw', request()->route()->patient->id)}}">Your browser isn't compatible</iframe>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <a href="{{route('app.patient.draw', request()->route()->patient->id)}}" class="btn btn-label-secondary" target="_blank">Draw</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
