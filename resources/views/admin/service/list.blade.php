<x-admin>
    @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    @endpush
    <x-slot name="title">Services</x-slot>
    <div class="mb-3">
        <a href="{{ route('admin.services.create') }}" class="btn btn-success"><i class="bx bx-plus"></i> Add New </a>
    </div>
    <div class="row">
        @foreach ($services as $item)
            <div class="col-xl-4 col-sm-6">
                <div class="card shadow-lg rounded">
                    <div class="card-header d-flex gap-3">
                        <h3 class="text-primary">{!! $item->icon !!}</h3>
                        <h4> {{ $item->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-justify ">
                            <div class="text-dark">
                                {{ $item->body }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-3">
                           
                            <span class="badge {{ $item->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                            <a href="{{ route('admin.services.edit', $item->id) }}" class="fw-bold text-warning"><i
                                class="fas fa-pencil-alt"></i> Edit</a>
                            <form id="delete-form-{{ $item->id }}"
                                action="{{ route('admin.services.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="javascript:void(0);" class="fw-bold text-danger"
                                onclick="submitDeleteForm({{ $item->id }})">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                        </div>
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
