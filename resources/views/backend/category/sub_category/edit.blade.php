@extends('.backend.admin.layouts.master')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Sub category Edit</h1>
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
                            <h5 class="card-title">Edit Sub category </h5>
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
                            <form class="row g-3" action="{{route('sub.category.update')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-12">
                                    <label class="col-sm-3 col-form-label">Select Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" aria-label="Default select example" name="parent_category_id">

                                            @foreach($category as $category)
                                                <option @if($category->id == $data->parent_category_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" placeholder="title" value="{{$data->subcategory_name}}"
                                               name="subcategory_name">
                                        <input type="number" value="{{$data->id}}" hidden="hidden" name="id">
                                        <label for="title">Sub category name </label></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <div>
                                            <textarea placeholder="Description" class="form-control"
                                                       style="height: 100px" name="subcategory_description">{{$data->subcategory_description}}</textarea>
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
        </section>
    </main>
@endsection
