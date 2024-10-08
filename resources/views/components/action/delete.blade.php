<form action="{{$route}}" method="post" onsubmit="return confirmDelete()">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger btn-sm edit" title="Delete">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this item?');
    }
</script>
