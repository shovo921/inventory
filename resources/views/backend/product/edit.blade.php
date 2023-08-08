@extends('.backend.admin.layouts.master')
@section('push_after_script')
    <script>


        const input = document.getElementById("input");
        const preview = document.getElementById("preview");
        const deleteIcon = document.querySelector(".delete-icon");
        //


        input.addEventListener("change", function () {
            const reader = new FileReader();
            reader.addEventListener("load", function () {
                preview.src = reader.result;
                preview.classList.remove("preview-hidden");
            });
            reader.readAsDataURL(input.files[0]);
        });

        deleteIcon.addEventListener("click", function () {
            preview.src = "";
            preview.classList.add("preview-hidden");
            input.value = "";
        });


    </script>

@endsection
@section('push_after_style')
    <style>
        .preview-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            height: 200px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 1em;
            overflow: hidden;
        }

        .preview-container img {
            max-height: 100%;
            max-width: 100%;

        }

        .delete-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            display: none;
        }

        .preview-container:hover .delete-icon {
            display: block;
        }

        .custom-file-input {
            display: inline-block;
            padding: 0.5em 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
            margin-top: 1em;
        }

        .custom-file-input:hover {
            border-color: #999;
        }

        .custom-file-input:active {
            border-color: #666;
        }

        .custom-file-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px #ddd;
        }


    </style>

@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product Edit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">

                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Product </h5>
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
                            <form class="row g-3" action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" placeholder="name" value="{{$data->name}}"
                                               name="name">
                                        <input type="number" value="{{$data->id}}" hidden="hidden" name="id">
                                        <label for="title"> Product Name </label></div>
                                </div>
                                <div class=" com-md-3">
                                    <label class="col-sm-2 col-form-label"> Category</label>
                                    <div class="col-sm-10">
                                        <select  id="category" class="form-select" aria-label="Default select example" name="category_id">
                                            <option selected="">select category name</option>
                                            @foreach($category as $category )
                                                <option  @if($data->category_id == $category->id ) selected  @endif value="{{$category->id }}  ">

                                                    {{$category->title}}

                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class=" com-md-12">
                                    <label   class="col-sm-12 col-form-label"> Sub Category</label>
                                    <div class="col-sm-10">
                                        <select  id="sub_category" class="form-select" aria-label="Default select example" name="sub_category_id">
                                            <option selected="">select sub category name</option>
                                            <option  @if($data->sub_category_id)selected @endif value="{{$data->sub_category_id}}">{{$data->sub_category_name}} </option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" com-md-6">
                                    <label class="col-sm-6 col-form-label"> Brand name</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="brand_name">
                                            <option selected="">select brand name</option>
                                            @foreach($brand as $brand )

                                                <option @if($data->brand_name == $brand->title) selected="selected" value="{{$data->brand_name}}" @else value="{{$data->brand_name}}" @endif>
                                                    {{$brand->title}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="price" placeholder="price" value="{{$data->price}}"
                                               name="price">
                                        <label for="title">product price</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="quantity" placeholder="quantity" value="{{$data->quantity}}"
                                               name="quantity">
                                        <label for="title">product Qunatity</label></div>
                                </div>
                                <div class=" col-mb-12">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Expire Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="date" value="{{$data->expire_date}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <div>
                                            <textarea placeholder="Description" class="form-control"
                                                      style="height: 100px" name="description">{{$data->description}}</textarea>
                                        </div>
                                        <label></label></div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <div>
                                            <textarea placeholder="note" class="form-control"
                                                      style="height: 100px" name="note">{{$data->note}}</textarea>
                                        </div>
                                        <label></label></div>

                                </div>






                                <div class="col-md-6 ">

                                    <div class="preview-container">
                                        <img id="preview" class="preview-hidden"
                                             src="{{asset('frontend/server/image/product')}}/{{$data->image}}">
                                        <div class="icon">
                                            <i class="ri-close-circle-fill delete-icon"></i>
                                        </div>
                                    </div>
                                    <input type="file" id="input"  name="image">
                                    <label for="input" class="custom-file-input">please upload new image icon</label>
                                </div>


                                <div class="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token()}}">

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $(document).ready(function() {
            $('#category').change(function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: '/admin/subcategories/' + category_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#sub_category').empty();
                            $.each(data, function(key, value) {
                                $('#sub_category').append('<option value="' + value.id + '">' + value.subcategory_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#sub_category').empty();
                }
            });
        });
    </script>
@endsection
