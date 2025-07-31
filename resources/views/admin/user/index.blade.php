@extends('layouts.admin.admin')

@section('title', 'Roles')

@section('content')
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">RolePermission</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">Users</li>
            </ul>
        </div>
    </div>
    <!-- [ page-header ] end -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Users</h5>
                        <div class="card-header-action">
                            <a class="btn btn-primary rounded-pill" href="{{ route('user.create') }}">Create</a>
                            <div class="card-header-btn">
                                <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                    <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                       data-bs-toggle="expand"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body custom-card-action p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="hstack gap-3">{{ $loop->iteration }}</div>
                                        </td>
                                        <td class="text-dark fw-bold">{{ $user->name }}</td>
                                        <td class="text-dark fw-bold">{{ $user->email }}</td>
                                        <td class="text-dark fw-bold">
                                            @foreach($user->roles as $role)
                                                <span
                                                    class="badge bg-soft-primary text-primary ">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-end">
                                            <div class="hstack gap-2 justify-content-end">
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                   class="avatar-text avatar-md">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a href="{{ route('user.destroy', $user->id) }}"
                                                   class="avatar-text avatar-md">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
