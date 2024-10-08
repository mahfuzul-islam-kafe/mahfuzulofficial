<x-admin>
    @push('styles')
        <!-- bootstrap-datepicker css -->
        <link href="{{ asset('admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

        <!-- Plugins css -->
        <link href="{{ asset('admin/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    <x-slot name="title">Portfolio Create</x-slot>
    <form action="{{route('admin.portfolios.store')}}"  autocomplete="off" class="needs-validation" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="projectname-input" class="form-label">Project Title</label>

                            <input id="projectname-input" name="title" type="text" class="form-control"
                                placeholder="Enter project name..." required>
                            <div class="invalid-feedback">Please enter a project name.</div>
                        </div>

                        <div class="mb-3">
                            <label for="projectdesc-input" class="form-label">Project Description</label>
                            <textarea class="form-control" id="projectdesc-input" name="description" rows="3"
                                placeholder="Enter project description..." required></textarea>
                            <div class="invalid-feedback">Please enter a project description.</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <label class="form-label">Attached Image</label>
                                <input type="file" class="form-control" id="image-input" name="image"
                                    accept="image/*">
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/img/no-image.png') }}" alt="" id="image-preview"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Publish</h5>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label" for="project-status-input">Status</label>
                                <a class=" fw-bold waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-modal-center"><i class="bx bx-plus-circle"></i> Add type
                                </a>
                            </div>
                            <select class="form-select" id="project-status-input" name="type">
                                @foreach ($types as $type)    
                                <option value="{{$type->type}}">{{$type->display_type}}</option>
                                @endforeach
                                
                            </select>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Site Link</label>
                            <input type="text" class="form-control" placeholder="Site Link" name="site_link">
                        </div>
                        <div>
                            <label class="form-label">Git Link</label>
                            <input type="text" class="form-control" placeholder="Git Link" name="git_link">
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Due Date</h5>

                        <input type="text" id="duedate-input" class="form-control" placeholder="Select due date"
                            name="delivery" data-date-format="dd M, yyyy" data-provide="datepicker"
                            data-date-autoclose="true" required />
                        <div class="invalid-feedback">Please select due date.</div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <div class="">
                    <div class="text-end mb-4">
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </form>
    <div>
        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Type</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin.types.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Add A New Type</label>
                                <input type="text" class="form-control" placeholder=". . ." name="type" required>
                            </div>
                            <button type="submit" class="btn btn-success ">Submit</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    </div>
    @push('scripts')
        <!-- bootstrap datepicker -->
        <script src="{{ asset('admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/project-create.init.js') }}"></script>
        <script>
            document.getElementById('image-input').addEventListener('change', function(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('image-preview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endpush
</x-admin>
