<div>
    <div class="col-md12">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Date Recorded</th>
                    <th>---</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vas as $va)
                    <tr>
                        <td></td>
                        <td>{{ $va->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-icon btn-light waves-effect waves-light"
                                    data-bs-toggle="dropdown" data-boundary="viewport" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" style="">
                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                            onclick="showVaDetails({{ $va->id }})">Details </a></li>
                                    <li>
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
            </tbody>

        </table>
    </div>
</div>
@include('_partials/_modals.va-details')
<script>
    function showVaDetails(vaId) {
        $.ajax({
            url: '/app/vision-acuity/' + vaId, // Replace with the actual endpoint URL
            type: 'GET',
            success: function(response) {
                // Populate modal with response data
                $('#va-details-modal .modal-body').html(response);
                $('#va-details-modal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    }
</script>
