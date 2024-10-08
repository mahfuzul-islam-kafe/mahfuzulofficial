<x-admin>
    <x-slot name="title">Portfolio</x-slot>
    <div class="mb-3">
        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-success"><i class="bx bx-plus"></i> Add New </a>
    </div>
    <div class="row">
        @foreach ($portfolios as $item)
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ Storage::url($item->image) ?? asset('assets/img/no-image.png') }}"
                                class="img-fluid" alt="...">
                            <div class="flex-grow-1 overflow-hidden mt-3">
                                <h5 class="text-truncate font-size-15"><a href="javascript: void(0);"
                                        class="text-dark">{{ $item->title }}</a></h5>
                                <p class="text-muted mb-1">{{ $item->description }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-3">
                                <span class="badge bg-success">{{ $item->type }}</span>
                            </li>
                            <li class="list-inline-item me-3">
                                <i class= "bx bx-calendar me-1"></i> {{ $item->delivery }}
                            </li>
                            <li class="list-inline-item me-3">
                                <a href="{{ $item->site_link }}" class="fw-bold text-info">Site Link</a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a href="{{ $item->git_link }}" class="fw-bold text-success">Git Link</a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="fw-bold text-warning"><i
                                        class="fas fa-pencil-alt"></i> Edit</a>
                            </li>
                            <li class="list-inline-item me-3">
                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                
                                <a href="javascript:void(0);" class="fw-bold text-danger" onclick="submitDeleteForm({{ $item->id }})">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this portfolio?');
        }
        function submitDeleteForm(id) {
        if (confirmDelete()) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
    </script>
</x-admin>
