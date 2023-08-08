@extends('.backend.admin.layouts.master')

@section('content')
<style>
    .image_viewr img{
        height: 200px;
    }
    .mt-10{
        margin-top: 10px;
    }
</style>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Order Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">Order Details</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="container">
                <div class="row">
                    @if(isset($data->product_id))
                    <div class="card mb-4 ">
                        <div class="card-body mt-3 ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$product->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Price</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$product->price}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Subtotal</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$data->sub_total}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="image_viewr">
                                        <img  class="preview-hidden1"
                                             src="{{asset('frontend/server/image/product')}}/{{$product->image}}" />
                                    </div>
                                </div>
                            </div>

                            <hr>


                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"> create Date</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$data->created_at->toDateString()}}  </p>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"> Expire  Date</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->expire_date}}  </p>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="card-body mt-3 ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Title</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$data->title}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$data->description}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">quantity</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$data->quantity}}</p>
                                </div>
                            </div>

                            <hr>

                        </div>

                        @endif
                        <h4>update Order Status</h4>
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
                    <form class="row g-3" action="{{route('order.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-4">
                        <select id="inputState" class="form-select" name="status">
                            <option selected="">Choose Order Status</option>
                            <option value="2">Approved</option>
                            <option value="3">Rejected</option>
                        </select>
                        <div class="mt-10">
                            <textarea placeholder="Note" class="form-control" style="height: 100px" name="note" spellcheck="false"></textarea>
                        </div>
                        <input name="product_id" hidden="" value="{{$data->product_id}}"/>
                        <input name="recognition_id" hidden="" value="{{$data->id}}"/>
                        <input name="status_checker" hidden="" value="{{$data->status_checker}}"/>
                        <input name="quantity" hidden="" value="{{$data->quantity}}"/>
                        <div class="mt-10"> <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                    </form>
            </div>
        </section>
    </main>
@endsection

