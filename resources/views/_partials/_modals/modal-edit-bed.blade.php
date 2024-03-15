<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="edit-bed-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit Bed</h3>
                </div>
                <form wire:submit.prevent="updateBed" class="row g-3">
                    <div class="col-12 col-md-12">
                        <label class="form-label"> Name</label>
                        <input type="text" name="name" wire:model.prevent="BedName" class="form-control" />
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label"> Ward</label>
                        <select name="ward_id" id="" wire:model.prevent="WardId" class="form-control">
                            @foreach (\App\Models\Ward::all() as $ward)
                                <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label"> Price</label>
                        <input type="number" name="price" wire:model.prevent="BedPrice" class="form-control"
                            placeholder="Bed Price" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
