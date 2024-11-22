@extends('Staff.layouts.staff')

@section('title', 'Roles'))

@section('content')
<div class="col-md-12">
    @can('create', App\Models\Role::class)
    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary mb-4">Create Role</a>
    @endcan
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Role Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>
                    <!-- Only admin can create roles -->
                    @can('create', App\Models\Role::class)
                    <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-warning btn-sm">Edit</a>
                    @endcan

                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        @can('create', App\Models\Role::class)
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection