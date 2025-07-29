@extends('layouts.admin.login')

@section('title', 'Login')

@section('content')
    <!--! ================================================================ !-->
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div
                        class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5">
                        <h2 class="fs-20 fw-bolder mb-4 text-center">Login</h2>
                        <form action="{{ route('authenticate') }}" class="w-100 mt-4 pt-2" method="POST">
                            @csrf

                            <div class="mb-4">
                                <input type="email" class="form-control" placeholder="Email or Username" name="email" required>
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
@endsection
