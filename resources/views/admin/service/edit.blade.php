<x-admin>
  
    <x-slot name="title">Services Create</x-slot>
    <form action="{{route('admin.services.update',$item)}}"  autocomplete="off" class="needs-validation" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="projectname-input" class="form-label">Service Icon</label>
                            <a href="https://icons.getbootstrap.com/" class="ms-3">Browse icon</a>
                            <input id="projectname-input" name="icon" type="text" class="form-control"
                                placeholder="Put the icon here..." required value="{{$item->icon}}">
                        </div>

                        <div class="mb-3">
                            <label for="projectdesc-input" class="form-label">Title</label>
                            <input id="projectname-input" name="title" type="text" class="form-control"
                                placeholder="Enter the Title" required value="{{$item->title}}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="projectdesc-input" class="form-label">Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$item->body}}</textarea>
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
                        <div class="form-check form-switch form-switch-md mb-3" dir="rtl">
                            <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" name="status" {{ $item->status == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="SwitchCheckSizemd" >Status</label>
                        </div>
                        <div class="text-end mb-4 ">
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </form>
    
</x-admin>
