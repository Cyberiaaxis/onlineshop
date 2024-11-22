@extends('Staff.layouts.staff')

@section('title', 'Create role')

@section('content')
<div class="col-md-12">
    <h3>Create Role</h3>
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="role_name">Role Name</label>
            <input type="text" id="role_name" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create Role</button>
    </form>
</div>
@endsection