<div>
    <div class="card-header">
        <input type="text" placeholder="search" class="form-control">
    </div><!-- /.card-header -->
    <!-- .table-responsive -->
    <div class="table-responsive">
        <!-- .table -->
        <table class="table">
            <!-- thead -->
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Primary Insurance Plan</th>
                    <th class="text-right">Outstanding Amount</th>
                    <th class="align-middle text-right">*</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($billings as $billing)
                    <tr>
                        <td class="align-middle"><a
                                href="{{ route('app.patients.show', $billing->patient->id) }}">{{ $billing->patient->user->firstname }}
                                {{ $billing->patient->user->middlename }} {{ $billing->patient->user->lastname }}
                                [HRN{{ sprintf('%06d', $billing->patient->hospital_no) }}]</a>
                        </td>
                        <td>{{ $billing->patient->hmo ? $billing->patient->hmo->name : 'Patient Self Pay' }} </td>
                        <td class="text-right">{{ number_format($billing->total_amount) }}</td>
                        <td class="align-middle text-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-icon btn-light waves-effect waves-light"
                                    data-bs-toggle="dropdown" data-boundary="viewport" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" style="">
                                    <li><a href="" class="dropdown-item" href="javascript:void(0);">Receive
                                            Payment</a></li>
                                    {{-- <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <l><a class="dropdown-item text-bg-danger" href="javascript:void(0);">Cancel</a></l> --}}
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody><!-- /tbody -->
        </table><!-- /.table -->
        <hr class="my-2">


        <div class="d-flex justify-content-around">
            {{ $billings->links() }}
        </div>


    </div><!-- /.table-responsive -->
</div>
