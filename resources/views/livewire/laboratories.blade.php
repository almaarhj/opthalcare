<div>
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="DataTables_Table_0_length"><label> <select wire:model="perPage"
                            class="form-select form-select-sm">
                            <option value="7">7</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select> </label></div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search"
                            class="form-control form-control-sm" wire:model.debounce.300ms='search'></label></div>
            </div>
        </div>
        <table class="table table-striped dataTable no-footer dtr-column" id="DataTables_Table_0">
            <thead>
                <tr>
                    <th class="control sorting_disabled dtr-hidden">S/N</th>
                    <th class="sorting">Name</th>
                    <th class="sorting">Category</th>
                    <th class="sorting">Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tests as $test)
                    <tr class="odd">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $test->name }}</td>
                        <td>{{ $test->category->name }}</td>
                        <td>{{ $test->price }}</td>
                        <td>
                            <div class="d-inline-block"><a href="javascript:;" class="dropdown hide-arrow"
                                    data-bs-toggle="dropdown"><i class="text-primary ti ti-dots-vertical"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end m-0">
                                    <li><a href="" wire:click.prevent="selectTemplate({{ $test->id }})"
                                            class="dropdown-item">Edit</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a id="dele{{ $test->id }}" data-value="{{ $test->id }}"
                                            class="dropdown-item text-danger delete-record">Delete</a></li>
                                </ul>
                            </div>
                            <script>
                                document.querySelector('#dele{{ $test->id }}').addEventListener('click', function(e) {
                                    // alert(this.getAttribute('data-value'));
                                    Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Yes, delete it!',
                                        customClass: {
                                            confirmButton: 'btn btn-primary me-3',
                                            cancelButton: 'btn btn-label-secondary'
                                        },
                                        buttonsStyling: false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.getElementById('dele#' + this.getAttribute('data-value')).submit();
                                        }
                                    })
                                })
                            </script>
                            <form id="dele#{{ $test->id }}" action="" method="POST"
                                style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                    Showing {{ $tests->firstItem() }} to {{ $tests->lastItem() }} of
                    {{ $tests->total() }} entries</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    {{ $tests->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('_partials._modals.modal-new-lab-test')
@include('_partials._modals.modal-import-lab-test')
<script>
    form.addEventListener("submit", e => {
        e.preventDefault();

        // save the file from the input file
        const file = e.target[1].files[
            0]; // getting the first input of the form then the first file of its files property (array)

        //parse the file with Papa.parse
        Papa.parse(file, {
            header: true,
            complete: function(results) {
                // read the data from results
                const {
                    data
                } = results;

                // Get CSRF token from meta tag
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content');

                // Send each element to Laravel route for saving
                data.forEach((element, index) => {
                    const progressBarId = `progressBar${index}`;
                    const progressBarHTML = `
                        <div class="progress mt-3" style="height: 30px;">
                            <div id="${progressBarId}" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                    `;
                    progressBarsContainer.innerHTML += progressBarHTML;

                    const fetchPromise = fetch('students/import', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify(element),
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok.');
                            }
                            // Update progress bar when element is processed successfully
                            const progressBar = document.getElementById(progressBarId);
                            progressBar.style.width = '100%';
                            progressBar.innerText = '100%';
                            progressBar.classList.remove('progress-bar-striped',
                                'bg-info');
                            progressBar.classList.add('bg-success');
                            return response.json();
                        })
                        .catch(error => {
                            console.error(
                                'There was a problem with your fetch operation:',
                                error);
                            // Handle error response if needed
                            return Promise.reject(error);
                        });

                });
            }
        });
        form.reset();
    });
</script>
