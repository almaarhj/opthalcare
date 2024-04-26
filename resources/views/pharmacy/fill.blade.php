<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="text-center mb-4">
    <h3 class="mb-2">Fill Prescription</h3>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <span class="alert-icon text-primary me-2">
            <i class="ti ti-user ti-xs"></i>
        </span>
        {{ $request->patient->user->firstname }} {{ $request->patient->user->firstname }}
        [{{ app(App\Settings\SystemSettings::class)->number_prefix ?: 'HRN' }}{{ $request->patient->hospital_no }}]
    </div>
</div>
<form action="{{ route('app.procedure.store') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-4 col-md-4">
        <label class="form-label"> Name</label>
        <input type="text" name="name" value="{{ $request->drug->name }}" class="form-control" />
    </div>
    <div class="col-4 col-md-4">
        <label class="form-label"> Procedure Cost</label>
        <input type="text" name="procedure_cost" class="form-control" placeholder="Procedure Cost" />
    </div>
    <div class="col-4 col-md-4">
        <label class="form-label"> Theatre Cost</label>
        <input type="text" name="theatre_cost" class="form-control" placeholder="Theatre Cost" />
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
            aria-label="Close">Cancel</button>
    </div>
</form>
