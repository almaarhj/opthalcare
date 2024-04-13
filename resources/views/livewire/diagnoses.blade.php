<div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th></th>
                <th>Entry Date</th>
                <th>Case Description (ICD10)</th>
                <th>Status</th>
                <th>User</th>
                <th>---</th>
            </tr>
        </thead>
        <tbody>
            @if ($diagnoses->isEmpty())
                <tr>
                    <td colspan="6">
                        <div class="alert alert-warning">No Records to display at this moment</div>
                    </td>
                </tr>
            @else
                @foreach ($diagnoses as $diagnosis)
                    <tr>
                        <td></td>
                        <td>{{ $diagnosis->created_at->diffForHumans() }}</td>
                        <td>({{ $diagnosis->ICD->number }}) {{ $diagnosis->ICD->name }}</td>
                        <td>{{ $diagnosis->status }}</td>
                        <td>{{ $diagnosis->user->firstname }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-icon btn-light waves-effect waves-light"
                                    data-bs-toggle="dropdown" data-boundary="viewport" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" style="">
                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                            onclick="showDiagnosisDetails({{ $diagnosis->id }})">Details </a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <l><a class="dropdown-item text-bg-danger" href="javascript:void(0);">Delete</a></l>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</div>
@include('_partials._modals.modal-new-diagnosis')
@include('_partials/_modals.diagnosis-details')
<script>
    function showDiagnosisDetails(Id) {
        $.ajax({
            url: '/app/diagnosis/' + Id, // Replace with the actual endpoint URL
            type: 'GET',
            success: function(response) {
                // Populate modal with response data
                $('#diagnosis-details-modal .modal-body').html(response);
                $('#diagnosis-details-modal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    }
</script>
