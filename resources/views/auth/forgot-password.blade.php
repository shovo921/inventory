@extends('frontend.layouts.master')
@section('content')


        <div class="container">
            <div class="forgot-password">
    <div class="card text-center"  style="width: 500px">
        <div class="card-header h5 text-white bg-primary">Password Reset</div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="card-body px-5">
            <p class="card-text py-2">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
            <div class="form-outline">
                <input type="email" id="typeEmail" class="form-control my-3"  name="email" :value="old('email')" required autofocus />
                <label class="form-label" for="typeEmail" >Email input</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Reset password</button>
            </form>
            <div class="d-flex justify-content-between mt-4">
                <a class="" href="#">Login</a>
                <a class="" href="#">Register</a>
            </div>
        </div>
    </div>



    <div class="contact-left-dec">
        <img src="{{asset('frontend/assets/images/contact-left-dec.png')}}" alt="">
    </div>
    </div>

    <div class="footer-dec">
        <img src="{{asset('frontend/assets/images/footer-dec.png')}}" alt="">
    </div>
    </div>

@endsection
