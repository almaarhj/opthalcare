<div>
    <div class="col-md12">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Date Recorded</th>
                    <th>Left (OS)</th>
                    <th>Right (OD)</th>
                    <th>---</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vas as $va)
                    <tr>
                        <td>{{ $va->created_at->diffForHumans() }}</td>
                        <td>{{ $va->left_os }}</td>
                        <td>{{ $va->right_od }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-icon btn-light waves-effect waves-light"
                                    data-bs-toggle="dropdown" data-boundary="viewport" aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" style="">
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
