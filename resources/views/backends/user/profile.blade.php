@extends('backends.master')
@section('title','Profile')
@section('contents')
<div class="card">
    <div class="card-header text-uppercase">Update Profile</div>
    <div class="card-body">
        <form action="{{ route('profile.update',['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ $user->name }}">
                </div>
                <div class="col-sm-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $user->email }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{ $user->username }}">
                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <div class="col-md-6">
                    <label for="photo" class="col-form-label">@lang('Profile')</label>
                    <input name="photo" type="file" class="dropify" data-height="100" data-default-file="{{ url('uploads/all_photo/' . $user->photo) }}" value="{{ $user->photo }}" /><br>
                    <input type="hidden" name="video" value="{{ $user->photo }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-lg-right ml-1">Update</button>
            <a href="{{ route('home') }}" class="btn btn-secondary float-lg-right">Cancel</a>
        </form>
    </div>
</div>
@endsection
