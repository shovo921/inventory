@extends('.backend.admin.layouts.master')
@section('push_after_style')
<style>

    .icon-hover:hover {
        border-color: #3b71ca !important;
        background-color: white !important;
        color: #3b71ca !important;
    }

    .icon-hover:hover i {
        color: #3b71ca !important;
    }
</style>
@endsection
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Shoping Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">Shoping Details</li>
                </ol>
            </nav>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">


            <!-- content -->
            <section class="py-5">
                <div class="container">
                    <div class="row gx-5">
                        <aside class="col-lg-6">

                            <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{asset('frontend/server/image/product')}}/{{$data->image}}">
                                    <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{asset('frontend/server/image/product')}}/{{$data->image}}" />
                                </a>
                            </div>

                            <!-- thumbs-wrap.// -->
                            <!-- gallery-wrap .end// -->
                        </aside>
                        <main class="col-lg-6">
                            <div class="ps-lg-3">
                                <h4 class="title text-dark">
                                    {{$data->name}}
                                </h4>
                                <div class="d-flex flex-row my-3">
                                    <div class="text-warning mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-1">
                                         {{$data->quantity}}
                                        </span>
                                    </div>
{{--                                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>--}}
                                    <span class="text-success ms-2">In stock</span>
                                </div>

                                <div class="mb-3">
                                    <span class="h5">1</span>
                                    <span class="text-muted">/per box</span>
                                </div>

                                <p>
                                    {{$data->description}}
                                </p>

                                <div class="row">
                                    <dt class="col-3">Brand Name:</dt>
                                    <dd class="col-9"> {{$data->brand_name}}</dd>

{{--                                    <dt class="col-3">category name</dt>--}}
{{--                                    <dd class="col-9">{{$data->category_name}}</dd>--}}

{{--                                    <dt class="col-3">sub category name</dt>--}}
{{--                                    <dd class="col-9">{{$data->sub_category_name}}</dd>--}}
                                                                        <dt class="col-3">Price</dt>
                                                                        <dd class="col-9" id="price">{{$data->price}}</dd>
                                    <dt class="col-3">Expire date</dt>
                                    <dd class="col-9">{{$data->expire_date}}</dd>
                                </div>

                                <hr />
                                <form class="row g-3" action="{{route('shoping.order')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="row mb-4">

                                    <!-- col.// -->
                                    <div class="input-group mb-3" style="width: 170px;">
                                        <button class="btn btn-white border border-secondary px-3" type="button" id="decrement-btn" data-mdb-ripple-color="dark">
                                            <i class="fas fa-minus">-</i>
                                        </button>
                                        <input type="text" class="form-control text-center border border-secondary" value="1" name="quantity" id="quantity-input" placeholder="1" aria-label="Example text with button addon" aria-describedby="decrement-btn increment-btn">
                                        <button class="btn btn-white border border-secondary px-3" type="button" id="increment-btn" data-mdb-ripple-color="dark">
                                            <i class="fas fa-plus">+</i>
                                        </button>
                                        <input type="hidden" value="{{$data->id}}" name="product_id">
                                    </div>
                                </div>

                                <button class="btn btn-primary shadow-0" type="submit"> <i class="me-1 fa fa-shopping-basket"></i> Recogision Apply now  </button>
                                </form>
                            </div>
                        </main>
                    </div>
                </div>
            </section>
            <!-- content -->

            <section class="bg-light border-top py-4">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-lg-8 mb-4">
                            <div class="border rounded-2 px-3 py-2 bg-white">
                                <!-- Pills navs -->
                                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                    <li class="nav-item d-flex" role="presentation">
                                        <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
                                    </li>


                                </ul>
                                <!-- Pills navs -->

                                <!-- Pills content -->
                                <div class="tab-content" id="ex1-content">
                                    <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                        <p>
                                           {{$data->description}}
                                        </p>
                                        <table class="table border mt-3 mb-2">
                                            <tr>
                                                <th class="py-2">Brand name:</th>
                                                <td class="py-2">{{$data->brand_name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-2">category name:</th>
                                                <td class="py-2">{{$data->category_name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-2">Sub category name:</th>
                                                <td class="py-2">{{$data->sub_category_name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-2">Note</th>
                                                <td class="py-2">{{$data->note}}</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!-- Pills content -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer -->
            <!-- Footer -->

        </div>
    </div>
</div>

    </main>
    <script>
        const decrementBtn = document.getElementById('decrement-btn');
        const incrementBtn = document.getElementById('increment-btn');
        const quantityInput = document.getElementById('quantity-input');
        const priceElement = document.getElementById('price');

        decrementBtn.addEventListener('click', () => {
            decrementQuantity();
        });

        incrementBtn.addEventListener('click', () => {
            incrementQuantity();
        });

        function decrementQuantity() {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 0) {
                quantity--;
                quantityInput.value = quantity;
                updatePrice();
            }
        }

        function incrementQuantity() {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
            updatePrice();
        }

        function updatePrice() {
            let quantity = parseInt(quantityInput.value);
            let price = {{$data->price}}; // Set the initial price or retrieve it from somewhere
            let totalPrice = quantity * price;
            priceElement.textContent = totalPrice;
        }
    </script>
@endsection

