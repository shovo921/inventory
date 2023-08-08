@extends('.backend.admin.layouts.master')
@section('push_after_style')
    <style>
        .card img {
            height: 200px;
        }
    </style>
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Recognition Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"> Recognition  Create</li>
                </ol>
            </nav>
        </div>

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation"> <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product in stock</button></li>
                    <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Recognition Manualy apply</button></li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                        <section class="section">
                            <div class="row">

                                @foreach($data as $data)
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <img src="{{asset('frontend/server/image/product')}}/{{$data->image}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$data->name}}</h5>
                                                <p class="card-text">Price:{{$data->price}}</p>
                                                <p class="card-text">quantity:{{$data->quantity}}</p>
                                                <p class="card-text">expire date:{{$data->expire_date}}</p>
                                            </div>
                                            <div class="text-center">
                                                <a href="{{route('shoping.card',['product_id'=>$data->id])}}" type="submit" class="btn btn-primary">Recognition apply  </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="col-lg-8">

                            <div class="card">
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="row g-3" action="{{route('recognition.manually.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="title" placeholder="title" value="{{ old('title') }}"
                                                       name="title">
                                                <label for="title">Title</label></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="qunatity" placeholder="qunatity" value="{{ old('qunatity') }}"
                                                       name="quantity">
                                                <label for="title">qunatity</label></div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <div>
                                            <textarea placeholder="Description" class="form-control"
                                                      style="height: 100px" name="description">{{ old('description') }}</textarea>
                                                </div>
                                                <label></label></div>

                                        </div>




                                        <div class="">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection



@section('push_after_script')

@endsection
