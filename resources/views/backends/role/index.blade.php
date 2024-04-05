@extends('backends.master')
@section('contents')
<div class="card">
    <div class="card-header text-uppercase">
        List Role
        <a href="{{ route('add_role') }}" class="btn btn-primary btn-sm float-lg-right"><i class="fa-solid fa-plus"> Add New</i></a>
    </div>
    <div class="card-body">
        <table class="table table-striped datatable nowrap table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                <tr>
                    <td class="table-plus">{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('edit_role', ['id' => $role->id]) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                        <form action="{{ route('destroy_role', ['id' => $role->id]) }}" method="POST" class="d-inline-block" id="delete-form-{{ $role->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $role->id }})"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">
                        <h4>No data</h4>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script>
    function confirmDelete(role) {
        Swal.fire({
            title: "Are you sure?"
            , text: "You want to delete this record!"
            , icon: "warning"
            , showCancelButton: true
            , confirmButtonColor: "#3085d6"
            , cancelButtonColor: "#d33"
            , confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + role).submit();
            }
        });
    }

</script>
@endsection
