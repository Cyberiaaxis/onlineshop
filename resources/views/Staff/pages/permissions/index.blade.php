@extends('Staff.layouts.staff')

@section('title', 'Permissions')
@section('content')
<div class="col-md-12">
    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary mb-4">Create Permission</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Permission Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
                <td>
                    <a href="{{ route('admin.permissions.edit', $permission) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection