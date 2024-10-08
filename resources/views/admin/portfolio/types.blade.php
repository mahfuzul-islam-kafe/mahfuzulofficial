<x-admin>
    <x-slot name="title">Type</x-slot>
    <div class="mb-3 col-10 mx-auto">
        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="bx bx-plus"></i> Add New </a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-10">
            <div class="card mx-auto">
                <div class="card-body">
                    <h4 class="card-title">Type Edit</h4>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Display Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $key=>$type) 
                                <tr>
                                    <td style="width: 80px">{{$key+1}}</td>
                                    <td>{{$type->type}}</td>
                                    <td>{{$type->display_type}}</td>
                                    <td style="width: 10px">
                                        <x-action.delete :route="route('admin.types.destroy', $type->id)"></x-action.delete>
                                    </form>
                                    </td>
                                </tr>  
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</x-admin>
