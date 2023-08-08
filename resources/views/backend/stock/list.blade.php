@extends('.backend.admin.layouts.master')

@section('content')
<style>
    .mt-10{
        margin-top: 37px;
    }
    .mt-5{
        margin-top: 10px;
    }
</style>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product Stock list</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">Stock list</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stock list</h5>

                            <form class="row g-3" action="{{route('stock.search')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputDate" class="col-sm-4 col-form-label">From Date</label>
                                    <div class="col-sm-10"> <input type="date" name="from_date" class="form-control"></div>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputDate" class="col-sm-4 col-form-label">To Date</label>
                                    <div class="col-sm-10"> <input type="date" name="to_date" class="form-control"></div>
                                </div>
                                <div class="col-md-2 mt-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                            </form>
                            <table class="table datatable ">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Product IN</th>
                                    <th scope="col">Product Out</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Expire Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $number=1;
                                ?>
                                @foreach($data as $data1)

                                    <tr>
                                        <th scope="row">{{$number++ }}</th>
                                        <td>{{$data1->name}}</td>
                                        <td>{{$data1->stock}}</td>
                                        <td>{{$data1->total_quantity}}</td>
                                        <td>{{$data1->stock - $data1->total_quantity}}</td>
                                        <td>{{$data1->expire_date}}</td>

                                        <td><a class="btn btn-success btn-sm" href="{{ route('shoping.card', ['product_id' => $data1->id]) }}" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip on top"><i class="bi bi-eye"></i></a>

                                            <a type="button" class="btn btn-danger btn-sm delete"  role="button" title="please, click to delete Contact"  data-bs-toggle="modal" data-bs-target="#basicModal" onclick="myFunction({{$data1->id}})" ><i class="bi bi-x-circle"></i></a></td>
                                    </tr>


                                @endforeach

                                </tbody>
                            </table>
                            <div class="card-body">

                                <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('conatct.destroy')}}" method="post">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <input type="number" id="id" name="id"  hidden=""/>
                                                    <h5 class="modal-title">Are you want to delete ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger"> Delete</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


