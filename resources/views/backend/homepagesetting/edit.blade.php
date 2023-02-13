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


        const input1 = document.getElementById("input1");
        const preview1 = document.getElementById("preview1");
        const deleteIcon1 = document.querySelector(".delete-icon1");

        input1.addEventListener("change", function () {
            const reader1 = new FileReader();
            reader1.addEventListener("load", function () {
                preview1.src = reader1.result;
                preview1.classList.remove("preview-hidden1");
            });
            reader1.readAsDataURL(input1.files[0]);
        });

        deleteIcon1.addEventListener("click", function () {
            preview1.src = "";
            preview1.classList.add("preview-hidden1");
            input1.value = "";
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

        /*    for 2nd flied*/
        .preview-container1 {
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

        .preview-container1 img {
            max-height: 100%;
            max-width: 100%;
        }

        .delete-icon1 {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            display: none;
        }

        .preview-container1:hover .delete-icon1 {
            display: block;
        }

        .custom-file-input1 {
            display: inline-block;
            padding: 0.5em 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
            margin-top: 1em;
        }

        .custom-file-input1:hover {
            border-color: #999;
        }

        .custom-file-input1:active {
            border-color: #666;
        }

        .custom-file-input1:focus {
            outline: none;
            box-shadow: 0 0 0 2px #ddd;
        }
    </style>

@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Home page Setting</h1>
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
                            <h5 class="card-title">Edit Home Page Setting list /</h5>
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
                            <form class="row g-3"
                                  @if($data)
                                      action="{{route('homepage.edit')}}"
                                  @else
                                      action="{{route('homepage.store')}}"
                                  @endif


                                  method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" placeholder="title"
                                               name="title" @if($data) value="{{$data->title}}" @endif>
                                        <label for="title">Title</label></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="phone_number"
                                               placeholder="Phone Number" @if($data) value="{{$data->phone_number}}"
                                               @endif name="phone_number">
                                        <label for="phone_number">Phone Number</label></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                               name="email" @if($data)value="{{$data->email}}" @endif >
                                        <label for="email">Email</label></div>
                                </div>


                                <div class="col-md-6">

                                    <div class="preview-container">
                                        <img id="preview" class="preview-hidden"
                                             @if($data)
                                                 src="{{asset('frontend/server/image')}}/{{$data->logo}}"
                                             @else
                                                 src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                                            @endif


                                        >
                                        <div class="icon">
                                            <i class="ri-close-circle-fill delete-icon"></i>
                                        </div>
                                    </div>
                                    <input type="file" id="input" style="display: none;" name="logo">
                                    <label for="input" class="custom-file-input">please upload logo </label>
                                </div>
                                <div class="col-md-6">
                                    {{--                                    <div class="form-floating">--}}
                                    {{--                                        <input type="file" class="form-control custom-file-input" id="input" placeholder="logo" >--}}
                                    {{--                                        <label for="input">Logo</label></div>--}}
                                    {{--                                    </div>--}}
                                    <div class="preview-container1">
                                        <img id="preview1" class="preview-hidden1"
                                             @if($data)
                                                 src="{{asset('frontend/server/image')}}/{{$data->image}}"
                                             @else
                                                 src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                                            @endif

                                        >
                                        <div class="icon1">
                                            <i class="ri-close-circle-fill delete-icon1"></i>
                                        </div>
                                    </div>
                                    <input type="file" id="input1" style="display: none;" name="banner">
                                    <label for="input1" class="custom-file-input1">please upload banner</label>

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
@endsection
