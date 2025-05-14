@extends('layouts/blankLayout')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection

@section('content')
    <!-- Login 9 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="d-flex justify-content-center text-bg-light">
                        <div class="col-12 col-xl-9"> 
                            <hr class="border-light-subtle mb-4">
                            <h2 class="h1 mb-4">Portal BMN </h2>
                            <p class="lead mb-5">Barang Milik Negara</p>
                            <div class="text-endx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                                    class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                    <path
                                        d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-md-6 col-xl-5">
                    <div class="bg-primary card border-0 rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class=" mb-4">
                                        <h3 class="text-white">Sign in</h3>
                                        <p class="text-white">Belum punya akun? <a class="bs-light-border-subtle"
                                                href="{{ route('register') }}">Daftar</a></p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class=" mb-3">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email" required>
                                            <label for="email" class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="">
                                            <input type="password" class="form-control" name="password" id="password"
                                                value="" placeholder="Password" required>
                                            <label for="password" class="form-label">=</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-light btn-lg text-primary" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
    </section>
@endsection

<style>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"><link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-9/assets/css/login-9.css">
</style>
