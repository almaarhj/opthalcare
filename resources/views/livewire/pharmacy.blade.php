<div>
    <!-- .card-header -->
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
                    <th>Date</th>
                    <th>Patient</th>
                    <th>Drug/Generic</th>
                    <th>Requester</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td class="align-middle text-nowrap">{{ $request->created_at->diffForHumans() }}</td>
                        <td class="align-middle">{{ $request->patient->user->firstname }}</td>
                        <td class="align-middle">

                            <span class="badge badge-lg bg-primary mb-1">

                                {{ $request->drug->name }}

                            </span>


                        </td>
                        <td class="align-middle">{{ $request->user->firstname }}</td>
                        <td class="align-middle text-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"
                                    data-boundary="viewport" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i> <span class="sr-only">Actions</span></button>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="/pharmacy/request/996/view?print" class="dropdown-item" target="_blank">
                                        Print
                                    </a>
                                    <button class="dropdown-item" data-remote="/pharmacy/request/996/view"
                                        data-toggle="modal" data-target="#global-modal" type="button">
                                        Details
                                    </button>


                                    <button class="dropdown-item" data-toggle="modal"
                                        data-remote="/pharmacy/request/996/fill" data-target="#global-modal-lg"
                                        type="button">
                                        Fill
                                    </button>

                                    <button class="dropdown-item" data-toggle="question"
                                        data-question="Cancel All Prescription Lines in this Request?"
                                        data-remote="/pharmacy/request/996/cancel" type="button">
                                        Cancel
                                    </button>


                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody><!-- /tbody -->
        </table><!-- /.table -->
        <hr class="my-2">


        <div class="d-flex justify-content-around">


        </div>


    </div><!-- /.table-responsive -->
</div>
