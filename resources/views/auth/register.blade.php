
@extends('frontend.layouts.master')
@section('push_bofore_style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//geodata.solutions/includes/countrystatecity.js"></script>

@endsection

@section('push_after_style')
<style>

        .margin-top{
        margin-top: 100px;
        }
    </style>
@endsection
@section('content')

    <section class="vh-100 gradient-custom margin-top">

        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration </h3>


                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register-step-one') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control "  name="name" :value="old('name')" required autofocus  value="  {{ session('name') }}"/>
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control " />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">

                                            <select class="form-select form-control form-control-lg" id="Profile_created_by" aria-label="Default select example" name="marital_status">
                                                <option selected> </option>
                                                <option value="Self">Self</option>
                                                <option value="Parents">Parents</option>
                                                <option value="Sibling">Sibling</option>
                                                <option value="Relative">Relative</option>
                                                <option value="Friend">Friend</option>
                                                <option value="customOption">Other</option>

                                            </select>
                                            <label class="form-label" for="Profile_created_by">Profile created by *</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="date" id="date" class="form-control " name="brith-date" />
                                            <label class="form-label" for="date">Date of Birth*
                                            </label>
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

                                <div class="MARITALSTATUS">
                                    <label>
                                        Country
                                    </label>
                                    <select  name="country" id="countryId" class="form-select countries" aria-label="Default select example">
                                        <option selected > Select your Country</option>



                                    </select>


                                </div>
                                <div class="MARITALSTATUS">
                                    <label>
                                        Sate
                                    </label>
                                    <select name="sate" class="form-select states" aria-label="Default select example" id="stateId">
                                        <option selected> Select your sate</option>
                                    </select>


                                </div>
                                <div class="MARITALSTATUS">
                                    <label>
                                        City
                                    </label>
                                    <select  name="city" class="form-select cities" aria-label="Default select example" id="cityId">
                                        <option selected> select City</option>


                                    </select>


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


