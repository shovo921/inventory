
@extends('frontend.layouts.master')
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration </h3>

                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" id="name" type="text" name="name" :value="old('name')" required autofocus />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input id="email"  type="email" name="email" :value="old('email')" required class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                                   value="option1" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                                   value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                                   value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input id="password" class="form-control form-control-lg"
                                                   type="password"
                                                   name="password"
                                                   required autocomplete="new-password"  />
                                            <label class="form-label" for="emailAddress">password</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input id="password_confirmation" class="form-control form-control-lg"
                                                   type="password"
                                                   name="password_confirmation" required />
                                            <label class="form-label" for="phoneNumber">Confirm password</label>
                                        </div>

                                    </div>
                                </div>



                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-dec">
        <img src="{{asset('frontend/assets/images/contact-dec.png')}}" alt="">
    </div>
    <div class="contact-left-dec">
        <img src="{{asset('frontend/assets/images/contact-left-dec.png')}}" alt="">
    </div>
    </div>

    <div class="footer-dec">
        <img src="{{asset('frontend/assets/images/footer-dec.png')}}" alt="">
    </div>
@endsection


