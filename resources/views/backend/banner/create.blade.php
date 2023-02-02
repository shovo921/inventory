@extends('.backend.admin.layouts.master')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Banner Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">

                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create banner list /</h5>
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating"> <input type="text" class="form-control" id="title" placeholder="title"> <label for="title">Title</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"> <input type="text" class="form-control" id="section_name" placeholder="section_name"> <label for="floatingEmail">Section name</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"> <input type="text" class="form-control" id="invalidCheck" placeholder="link"> <label for="link">Section link</label></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating"><textarea name="description" class="form-control" placeholder="Description" id="Description" style="height: 100px;"></textarea><label for="floatingTextarea">Description</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"> <input type="text" class="form-control" id="Header" placeholder="Header" name="header_title"> <label for="Header">Header Title</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"> <input type="number" class="form-control" id="number" placeholder="Number" name="number"> <label for="number">Phone number</label></div>
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('banner.list')}}" class="btn btn-secondary">Banner list</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
