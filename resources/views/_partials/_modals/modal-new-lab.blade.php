<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="new-lab-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">New Lab for
                        {{ \App\Models\Patient::find(request()->route()->patient->id)->user->firstname }}
                    </h3>
                </div>
                <form wire:submit.prevent="updateAntenatal" class="row g-3">
                    <div class="col-12 col-md-12">
                        <label class="form-label">Lab Test</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">----</option>
                            @foreach (\App\Models\LabCategory::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label"> Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <a href="{{ route('app.patient.draw', request()->route()->patient->id) }}"
                            class="btn btn-label-secondary" target="_blank">Draw</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
