@extends('frontend.layouts.master')

@section('push_bofore_style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//geodata.solutions/includes/countrystatecity.js"></script>

@endsection
@section('push_after_style')
    <script>

        var typeObject = {
            Hinduism: ["Brahmins", "Kshatriyas", "Waishyas","Shudras","Other"],
            Islam: ["Sunni", "Shia", "Ahmadiyya", "Hanafi"],
            Christianity: ["Catholic", "Orthodox", "Protestant"],
            Buddhism: ["Mahayana", "Nichiren Buddhism", "Pure Land Buddhism","Tantrayana","Theravada","Tendai Buddhism","Zen Buddhism"],
        }
        window.onload = function () {
            var typeSel = document.getElementById("typeSel"),
                fieldSel = document.getElementById("fieldSel")
            for (var type in typeObject) {
                typeSel.options[typeSel.options.length] = new Option(type, type);
            }
            typeSel.onchange = function () {
                fieldSel.length = 1; // remove all options bar first
                if (this.selectedIndex < 1) return; // done
                var ft = typeObject[this.value];
                for (var field in typeObject[this.value]) {
                    fieldSel.options[fieldSel.options.length] = new Option(ft[field], ft[field]);
                }
            }
            typeSel.onchange();
        }
    </script>
@endsection
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



                                <form method="post" action="{{route('search')}}">
                                    @csrf
                                    <p>MEMBER ID SEARCH</p>
                                    <input type="text " name="member-name"" class="member-name">

                                    <button class="btn btn-primary search-button" type="submit" role="button">search</button>

                                </form>

                                <form method="post" action="{{route('search')}}">
                                 @csrf
                                    <div class="mutiple-search mt-10 ">

                                        <label class="form-check-label mb-10" for="inlineRadio1">Looking for</label> <br>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="Bride" value="female">
                                            <label class="form-check-label" for="Bride">Bride</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="Groom" value="male">
                                            <label class="form-check-label" for="Groom">Groom</label>
                                        </div>
                                    </div>

                                    <div class="age-fitering height">
                                        <div class="minage">
                                            <level>MINIMUM AGE</level>
                                            <input type="number" name="min_age">
                                        </div>
                                        <div class="maxage">
                                            <level>MAXIMUM AGE</level>
                                            <input type="number" name="max_age">
                                        </div>

                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            MARITAL STATUS
                                        </label>
                                        <select class="form-select" aria-label="Default select example" name="marital_status">
                                            <option selected> select status</option>
                                            <option value="Married">Married</option>
                                            <option value="unmarried">unmarried</option>
                                            <option value="Divorce">Divorce</option>

                                        </select>


                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            RELIGION
                                        </label>
                                        <select class="form-select "  aria-label="Default select example" name="religion" id="typeSel">
                                            <option selected> select RELIGION</option>


                                        </select>


                                    </div>
                                    <div class="MARITALSTATUS">
                                        <label>
                                            CASTE / SECT
                                        </label>
                                        <select name="caste" class="form-select" aria-label="Default select example" id="fieldSel">
                                            <option selected> Select CASTE / SECT</option>

                                        </select>


                                    </div>

                                    <div class="MARITALSTATUS">
                                        <label>
                                            MOTHER TONGUE
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>  MOTHER TONGUE</option>
                                            <option value="Bangla">Bangla</option>
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Urdro">Urdro</option>

                                        </select>


                                    </div>


                                    <div class="age-fitering">
                                        <div class="minage">
                                            <level>MIN HEIGHT (FEET)</level>
                                            <input type="number" name="min_height">
                                        </div>
                                        <div class="maxage">
                                            <level>MAX HEIGHT (FEET)</level>
                                            <input type="number" name="max_height">
                                        </div>

                                    </div>
                                    <div class="profession">
                                        <label>
                                            Profession
                                        </label>
                                        <input type="text " name="profession" class="profession">

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

                            <button class="btn btn-primary search-button" type="submit"  role="button">search</button>


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



