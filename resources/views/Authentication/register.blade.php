@extends('Authentication.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 my-5  registerform">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-10 offset-1">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                                placeholder="User Name..." name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                placeholder="Enter Email..." name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control form-control-user @error('phone') is-invalid @enderror"
                                                placeholder="Enter Phone..." name="phone" value="{{ old('phone') }}">
                                            @error('phone')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control form-control-user @error('address') is-invalid @enderror"
                                                placeholder="Enter Address..." name="address" value="{{ old('address') }}">
                                            @error('address')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    placeholder="Password" name="password" value="{{ old('password') }}">
                                                @error('password')
                                                    <small class="invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password"
                                                    class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                                                    placeholder="Repeat Password" name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}">
                                                @error('password_confirmation')
                                                    <small class="invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                                        <hr>

                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('userLogin') }}">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
