@extends('Staff.layouts.staff')

@section('title', 'Edit role')
@section('content')
<div class="col-md-12">
    <h3>Edit Role</h3>
    <form action="{{ route('admin.roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="role_name">Role Name</label>
            <input type="text" id="role_name" name="name" class="form-control" value="{{ $role->name }}" required>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Update Role</button>
    </form>
</div>
@endsection