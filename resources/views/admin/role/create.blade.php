@extends('layouts.admin.admin')

@section('title', 'Role create')

@section('content')
    <form action="{{ route('role.store') }}" method="post">
        @csrf

        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">RolePermission</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Roles</a></li>
                    <li class="breadcrumb-item">Role Create</li>
                </ul>
            </div>
        </div>
        <!-- [ page-header ] end -->

        @if ($errors->any())
            <div class="alert alert-danger m-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch">
                        <div class="card-header">
                            <h5 class="card-title">Role</h5>
                            <div class="card-header-action">
                                <a class="btn btn-danger rounded-pill" href="{{ route('role.index') }}">Back</a>
                                <button class="btn btn-success rounded-pill" type="submit">Store</button>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5>Role Name</h5>
                            <div class="form-group pb-3">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="superadmin"
                                       value="{{ old('name') }}" required>
                            </div>
                            <h5>Permissions</h5>
                            <div class="form-group pb-3">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label>
                                            <input type="checkbox" id="select-all"> Select All
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach($permissions as $permission)
                                        <div class="col-lg-2">
                                            <label>
                                                <input type="checkbox" class="permission-checkbox" name="permissions[]"
                                                       value="{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectAllCheckbox = document.getElementById('select-all');
            const permissionCheckboxes = document.querySelectorAll('.permission-checkbox');

            selectAllCheckbox.addEventListener('change', function () {
                permissionCheckboxes.forEach(cb => {
                    cb.checked = selectAllCheckbox.checked;
                });
            });

            // agar alohida permission o'zgartirilsa, Select All ni holati ham yangilansin
            permissionCheckboxes.forEach(cb => {
                cb.addEventListener('change', function () {
                    if (!cb.checked) {
                        selectAllCheckbox.checked = false;
                    } else if ([...permissionCheckboxes].every(c => c.checked)) {
                        selectAllCheckbox.checked = true;
                    }
                });
            });
        });
    </script>
@endsection
