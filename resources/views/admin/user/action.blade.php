{{-- <a href="{{ route('suppliers.show', $id) }}" class="view btn btn-primary btn-sm">View</a> --}}
{{-- <a href="{{ route('suppliers.edit', $id) }}" class="edit btn btn-warning btn-sm">Edit</a> --}}
<div class="btn-list flex-nowrap">
  <a href="#" class="btn btn-outline-primary w-100 btn-sm" style="width: 100px; font-size: 12px; padding: 5px;">
    Edit
  </a>
  <a data-id="{{ $id }}" class="delete btn btn-danger w-100 btn-sm" style="width: 100px; font-size: 12px; padding: 5px;">
       Delete
  </a>
</div>

{{-- <button data-id="{{ $id }}" class="delete btn btn-danger btn-sm">Delete</button> --}}
