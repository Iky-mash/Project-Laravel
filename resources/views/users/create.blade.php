@extends('layouts.app')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@section('contents')
<h1 class="mb-0">Add User</h1>
<div class="pull-right">
    <a class="btn btn-primary" href="/profile"> Back</a>
</div>
<hr />

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" name="role" class="form-control" placeholder="Role">
    </div>
    <!-- Add other fields as needed -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection