@extends('backends.master')
@section('title','User Management')
@section('contents')
<div class="card">
    <div class="card-header text-uppercase">
        User List
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-lg-right"><i class="fa-solid fa-plus"> Add New</i></a>
    </div>
    <div class="card-body">
        <table class="table datatable table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <span>
                            <a class="example-image-link" href="{{ url('uploads/all_photo/'.$user->photo) }}" data-lightbox="lightbox-' . $user->id . '">
                                <img class="example-image profile-image" src="{{ url('uploads/all_photo/'.$user->photo) }}" alt="profile" width="90px" height="50px" style="cursor:pointer" />
                            </a>
                        </span>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit',['user'=>$user->id]) }}" class="btn btn-primary btn-outline btn-style btn-sm btn-md" data-toggle="tooltip" title="@lang('Edit')"><i class="fa fa-edit ambitious-padding-btn"></i></a>&nbsp;&nbsp;
                        <form id="deleteForm" action="{{ route('user.destroy',['user'=>$user->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-outline btn-style btn-sm btn-md delete-btn" title="@lang('Delete')">
                                <i class="fa fa-trash ambitious-padding-btn"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@push('js')

@endpush
@endsection
