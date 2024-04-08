@extends('backends.master')
@section('title','Create User')
@section('contents')
<div class="card">
    <div class="card-header text-uppercase">Create User</div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter full name">
                </div>
                <div class="col-sm-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <div class="col-md-6">
                    <label for="image" class="col-form-label">@lang('Profile')</label>
                    <input name="photo" type="file" class="dropify" data-height="100" /><br>
                    @error('photo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-lg-right ml-1">Save</button>
            <button type="button" class="btn btn-secondary float-lg-right" data-dismiss="modal">Cancel</button>
        </form>
    </div>
</div>
@endsection
