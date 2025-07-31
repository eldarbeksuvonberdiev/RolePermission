@extends('layouts.admin.admin')

@section('title', 'User create')

@section('content')
    <form action="{{ route('user.store') }}" method="post">
        @csrf

        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">RolePermission</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item">User Create</li>
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
                {{-- Chap ustun: Foydalanuvchi ma'lumotlari --}}
                <div class="col-lg-8">
                    <div class="card stretch">
                        <div class="card-header">
                            <h5 class="card-title">User</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="form-group pb-3">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Kimdir"
                                       value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group pb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="kimdir@mail.uz"
                                       value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group pb-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="password" required>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- O'ng ustun: Rol tanlash va tugmalar --}}
                <div class="col-lg-4">
                    <div class="card stretch">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">User Role</h5>
                            <div class="card-header-action">
                                <a class="btn btn-danger rounded-pill" href="{{ route('user.index') }}">Back</a>
                                <button class="btn btn-success rounded-pill" type="submit">Store</button>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="form-group pb-3">
                                <label for="roles">Roles:</label>
                                <select name="roles[]" id="roles" class="form-select form-control"
                                        data-select2-selector="tag" data-max-select2="tag" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
