<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="text-center mb-4">
    <h3 class="mb-2">Record Refraction for
        {{ \App\Models\Patient::find($patient)->user->firstname }}
        {{ \App\Models\Patient::find($patient)->user->lastname }}
    </h3>
</div>
<form action="{{ route('app.vision-acuity.store') }}" method="POST" class="row g-3">
    @csrf
    <input type="hidden" name="patient_id" value="{{ $patient }}">
    <h4>Case History</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>(RE)</th>
            <th>(LE)</th>
        </thead>
        <tbody>
            <tr>
                <td width="70%">ITCHING</td>
                <td><input type="text" name="itching_right" class="form-control"></td>
                <td><input type="text" name="itcging_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">PHOTOPHOBIA</td>
                <td><input type="text" name="photophobia_right" class="form-control"></td>
                <td><input type="text" name="photophobia_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">PAIN</td>
                <td><input type="text" name="pain_right" class="form-control"></td>
                <td><input type="text" name="pain_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">BLUR VISION AT FAR</td>
                <td><input type="text" name="blur_vision_far_right" class="form-control"></td>
                <td><input type="text" name="blur_vision_far_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">BLUR VISION AT NEAR</td>
                <td><input type="text" name="blur_vision_near_right" class="form-control"></td>
                <td><input type="text" name="blur_vision_near_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">DIPLOPIA</td>
                <td><input type="text" name="diplopia_right" class="form-control"></td>
                <td><input type="text" name="diplopia_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">BURNING SENSATION</td>
                <td><input type="text" name="burning_sensation_right" class="form-control"></td>
                <td><input type="text" name="burning_sensation_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">TEARING</td>
                <td><input type="text" name="tearing_right" class="form-control"></td>
                <td><input type="text" name="tearing_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">DISCHARGE</td>
                <td><input type="text" name="discharge_right" class="form-control"></td>
                <td><input type="text" name="discharge_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <h4>External Examination</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>RIGHT</th>
            <th>LEFT</th>
        </thead>
        <tbody>
            <tr>
                <td width="70%">ADNEXA</td>
                <td><input type="text" name="adnexa_right" class="form-control"></td>
                <td><input type="text" name="adnexa_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">CONJUCTIVA </td>
                <td><input type="text" name="conjuctiva_right" class="form-control"></td>
                <td><input type="text" name="conjuctiva_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">SCLERA</td>
                <td><input type="text" name="sclera_right" class="form-control"></td>
                <td><input type="text" name="sclera_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">PUPIL</td>
                <td><input type="text" name="pupil_right" class="form-control"></td>
                <td><input type="text" name="pupil_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">PALPEBRA</td>
                <td><input type="text" name="palpebra_right" class="form-control"></td>
                <td><input type="text" name="palpebra_left" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">CORNEA</td>
                <td><input type="text" name="cornea_right" class="form-control"></td>
                <td><input type="text" name="cornea_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <h4>Vision Acuity Test</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>DISTANCE</th>
            <th>PH</th>
        </thead>
        <tbody>
            <tr>
                <td width="70%">RIGHT</td>
                <td><input type="text" name="distance_right" class="form-control"></td>
                <td><input type="text" name="ph_right" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">LEFT</td>
                <td><input type="text" name="distance_left" class="form-control"></td>
                <td><input type="text" name="ph_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>NEAR</th>
        </thead>
        <tbody>
            <tr>
                <td width="80%">RIGHT</td>
                <td><input type="text" name="near_right" class="form-control"></td>
            </tr>
            <tr>
                <td width="80%">LEFT</td>
                <td><input type="text" name="near_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <h4>Present Glasses</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>SPH</th>
            <th>CYL</th>
            <th>AXIS</th>
            <th>PRISM</th>
            <th>BASE</th>
            <th>VA</th>
            <th>ADD</th>
            <th>VA</th>
        </thead>
        <tbody>
            <tr>
                <td width="70%">RIGHT</td>
                <td><input type="text" name="sph_right" class="form-control"></td>
                <td><input type="text" name="cyl_right" class="form-control"></td>
                <td><input type="text" name="axis_right" class="form-control"></td>
                <td><input type="text" name="prism_right" class="form-control"></td>
                <td><input type="text" name="base_right" class="form-control"></td>
                <td><input type="text" name="va_right" class="form-control"></td>
                <td><input type="text" name="add_right" class="form-control"></td>
                <td><input type="text" name="va2_right" class="form-control"></td>
            </tr>
            <tr>
                <td width="70%">LEFT</td>
                <td><input type="text" name="sph_left" class="form-control"></td>
                <td><input type="text" name="cyl_left" class="form-control"></td>
                <td><input type="text" name="axis_left" class="form-control"></td>
                <td><input type="text" name="prism_left" class="form-control"></td>
                <td><input type="text" name="base_left" class="form-control"></td>
                <td><input type="text" name="va_left" class="form-control"></td>
                <td><input type="text" name="add_left" class="form-control"></td>
                <td><input type="text" name="va2_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <h4>Auto Refraction</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>AUTO REFRACTION</th>
            <th>VA</th>
        </thead>
        <tbody>
            <tr>
                <td width="50%">RIGHT</td>
                <td><input type="text" name="auto_refraction_right" class="form-control"></td>
                <td><input type="text" name="va_right" class="form-control"></td>
            </tr>
            <tr>
                <td width="50%">LEFT</td>
                <td><input type="text" name="auto_refraction_left" class="form-control"></td>
                <td><input type="text" name="va_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <h4>Retinoscopy Findings</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <th></th>
            <th>AUTO REFRACTION</th>
            <th>VA</th>
        </thead>
        <tbody>
            <tr>
                <td width="50%">RIGHT</td>
                <td><input type="text" name="auto_refraction_right" class="form-control"></td>
                <td><input type="text" name="va_right" class="form-control"></td>
            </tr>
            <tr>
                <td width="50%">LEFT</td>
                <td><input type="text" name="auto_refraction_left" class="form-control"></td>
                <td><input type="text" name="va_left" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
            aria-label="Close">Cancel</button>
    </div>
</form>
