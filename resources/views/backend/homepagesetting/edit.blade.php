@extends('.backend.admin.layouts.master')
@section('push_after_script')
    <script>
        const input = document.getElementById("input");
        const preview = document.getElementById("preview");
        const deleteIcon = document.querySelector(".delete-icon");

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
            <h1>Home page  Setting</h1>
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
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" placeholder="title">
                                        <label for="title">Title</label></div>
                                </div>
                                <div class="col-md-6">
{{--                                    <div class="form-floating">--}}
{{--                                        <input type="file" class="form-control custom-file-input" id="input" placeholder="logo" >--}}
{{--                                        <label for="input">Logo</label></div>--}}
{{--                                    </div>--}}
{{--                                    <img id="preview">--}}
                                    <div class="preview-container">
                                        <img id="preview" class="preview-hidden" src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930">
                                        <div class="icon">
                                            <i class="ri-close-circle-fill delete-icon"></i>
                                        </div>
                                    </div>
                                    <input type="file" id="input" style="display: none;">
                                    <label for="input" class="custom-file-input">please upload logo </label>
                                </div>
                                <div class="col-md-6">
                                    {{--                                    <div class="form-floating">--}}
                                    {{--                                        <input type="file" class="form-control custom-file-input" id="input" placeholder="logo" >--}}
                                    {{--                                        <label for="input">Logo</label></div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <img id="preview">--}}
                                    <div class="preview-container">
                                        <img id="preview1" class="preview-hidden" src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930">
                                        <div class="icon">
                                            <i class="ri-close-circle-fill delete-icon1"></i>
                                        </div>
                                    </div>
                                    <input type="file" id="input1" style="display: none;">
                                    <label for="input" class="custom-file-input1">please upload logo </label>
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
