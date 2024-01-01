@extends('layouts.app')


@section('contents')
<h1 class="mb-0">Edit User</h1>
<div class="pull-right">
    <a class="btn btn-primary" href="/profile"> Back</a>
</div>
<hr />

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="" value="{{ $user->phone }}">
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" name="role" class="form-control" placeholder="" value="{{ $user->role }}">
    </div>
    <!-- Display and edit other fields as needed -->
    <div class="d-grid">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</form>
@endsection