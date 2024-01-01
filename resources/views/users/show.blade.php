@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail User</h1>
<div class="pull-right">
    <a class="btn btn-primary" href="/profile"> Back</a>
</div>
<hr />

<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Phone</label>
    <input type="email" name="email" class="form-control" value="{{ $user->phone }}" readonly>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Role</label>
    <input type="email" name="email" class="form-control" value="{{ $user->role }}" readonly>
</div>
<!-- Display other fields as needed -->
<div class="mb-3">
    <label for="created_at" class="form-label">Created At</label>
    <input type="text" name="created_at" class="form-control" value="{{ $user->created_at }}" readonly>
</div>
<div class="mb-3">
    <label for="updated_at" class="form-label">Updated At</label>
    <input type="text" name="updated_at" class="form-control" value="{{ $user->updated_at }}" readonly>
</div>
@endsection