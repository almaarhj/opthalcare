<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="text-center mb-4">
    <h3 class="mb-2">Receive Payment</h3>
</div>
<form action="" method="POST">
    @csrf
    <div class="form-group">
        <div class="form-label-group">
            <select name="location_id" class="custom-select" id="fls0" required="required">
                <option value=""> Choose...</option>

            </select>
            <label for="fls0">Cash Point</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <select name="payment_method_id" class="custom-select" id="fls1" required="required">
                <option value=""> Choose...</option>
            </select>
            <label for="fls1">Payment Method</label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <div class="form-label-group">
                <input value="{{ number_format($billing->amount) }}" id="fls2" name="amount" required="required"
                    autocomplete="off" type="text" class="form-control form-control-lg -text-right"
                    data-mask="currency" data-prefix="₦ " data-allow-decimal="true" data-decimal-limit="2">
                <label for="fls2">Paying Amount</label>
            </div>

        </div>
        <div class="form-group col-md-6">
            <div class="form-label-group">
                <input id="fls3" name="reference" autocomplete="off" type="text"
                    class="form-control form-control-lg -text-right">
                <label for="fls3">Reference</label>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
            aria-label="Close">Cancel</button>
    </div>
</form>
