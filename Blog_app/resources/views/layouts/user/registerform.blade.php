@extends('layouts.mainlayout')

<section>
    <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col  ">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                alt="Sample photo" class="img-fluid "
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:35rem" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Blog Nest</h3>
                                <form method="POST" action="{{ route('signUp-post') }}">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- Display success message -->
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="form3Example1m">First name</label>
                                                <input type="text" id="form3Example1m"
                                                    class="form-control form-control-lg" name="first_name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                                <input type="text" id="form3Example1n"
                                                    class="form-control form-control-lg" name="last_name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="form3Example1m1">Email Address</label>
                                            <input type="email" id="form3Example1m1"
                                                class="form-control form-control-lg" name="email" />
                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8">Password</label>
                                        <input type="password" id="form3Example8" class="form-control form-control-lg"
                                            name="password" />
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8Confirm">Confirm Password</label>
                                        <input type="password" id="form3Example8Confirm"
                                            class="form-control form-control-lg" name="password_confirmation" />
                                    </div>
                                    <div class="d-flex flex-column h-25">
                                        <div class="d-flex  justify-content-end pt-3">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-warning btn-lg ms-2 me-3">Sign Up</button>
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-light btn-lg">Cancel</button>
                                        </div>
                                        <p>Do you have an account? <a href="{{ route('signin') }}"
                                                class="link-info">Signin here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
