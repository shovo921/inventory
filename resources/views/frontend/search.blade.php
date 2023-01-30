@extends('frontend.layouts.master')
@section('content')


    <section>
        <div class="search">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="advance-search  border">
                            <div class="search-content">


                                <div class="Advance-search-title">
                                    <h3>
                                        Advance Search
                                    </h3>
                                </div>

                                <form>
                                    <p>MEMBER ID SEARCH</p>
                                    <input type="text " name="name" class="member-name">

                                    <a class="btn btn-primary search-button" href="#" role="button">search</a>

                                </form>

                                <form>
                                    <div class="mutiple-search mt-10 ">

                                        <label class="form-check-label mb-10" for="inlineRadio1">Looking for</label> <br>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Bride" id="Bride" value="Bride">
                                            <label class="form-check-label" for="Bride">Bride</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Bride" id="Groom" value="Groom">
                                            <label class="form-check-label" for="Groom">Groom</label>
                                        </div>
                                    </div>

                                    <div class="age-fitering height">
                                        <div class="minage">
                                            <level>MINIMUM AGE</level>
                                            <input type="number">
                                        </div>
                                        <div class="maxage">
                                            <level>MAXIMUM AGE</level>
                                            <input type="number">
                                        </div>

                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            MARITAL STATUS
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select status</option>
                                            <option value="1">Married</option>
                                            <option value="2">unmarried</option>

                                        </select>


                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            RELIGION
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select RELIGION</option>
                                            <option value="1">Hindu</option>
                                            <option value="2">muslim</option>

                                        </select>


                                    </div>
                                    <div class="MARITALSTATUS">
                                        <label>
                                            CASTE / SECT
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select CASTE / SECT</option>
                                            <option value="1">Married</option>
                                            <option value="2">unmarried</option>

                                        </select>


                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            MOTHER TONGUE
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>  MOTHER TONGUE</option>
                                            <option value="1">Bangla</option>
                                            <option value="2">English</option>

                                        </select>


                                    </div>


                                    <div class="age-fitering">
                                        <div class="minage">
                                            <level>MIN HEIGHT (FEET)</level>
                                            <input type="number" name="">
                                        </div>
                                        <div class="maxage">
                                            <level>MAX HEIGHT (FEET)</level>
                                            <input type="number" name="">
                                        </div>

                                    </div>
                                    <div class="profession">
                                        <p>profession</p>
                                        <input type="text " name="name" class="profession">

                                    </div>
                                    <div class="MARITALSTATUS">
                                        <label>
                                            Country
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select RELIGION</option>
                                            <option value="1">Hindu</option>
                                            <option value="2">muslim</option>

                                        </select>


                                    </div>
                                    <div class="MARITALSTATUS">
                                        <label>
                                            Sate
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select RELIGION</option>
                                            <option value="1">Hindu</option>
                                            <option value="2">muslim</option>

                                        </select>


                                    </div>
                                    <div class="MARITALSTATUS">
                                        <label>
                                            City
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select RELIGION</option>
                                            <option value="1">Hindu</option>
                                            <option value="2">muslim</option>

                                        </select>


                                    </div>

                                    <a class="btn btn-primary search-button" href="#" role="button">search</a>


                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > send proposal</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card">
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg"  class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg"  class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg"  class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg"  class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-item">
                                    <div class="card" >
                                        <img src="{{asset('frontend')}}/assets/images/profile.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Brithyear : 1997 year</p>
                                            <p class="card-text">Name : md nur islam</p>
                                            <p class="card-text">Profession : engineer</p>
                                            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" > view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <div class="contact-left-dec">
        <img src="{{asset('frontend/assets/images/contact-left-dec.png')}}" alt="">
    </div>








@endsection

