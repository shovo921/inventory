@extends('.backend.admin.layouts.master')

@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product list</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">Product list</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product list</h5>
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">price </th>
                                    <th scope="col">Category name</th>
                                    <th scope="col">Sub category name</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Expired Date</th>
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
                                    <td>{{$data1->price }}</td>
                                    <td>{{$data1->category_name}}</td>
                                    <td>{{$data1->sub_category_name}}</td>
                                    <td>{{ $data1->quantity}}</td>
                                    <td>{{$data1->expire_date}}</td>
                                    <td><a class="btn btn-success btn-sm" href="{{ route('product.edit', ['id' => $data1->id]) }}" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip on top"><i class="bi bi-eye"></i></a>
                                        <a type="button" class="btn btn-danger btn-sm delete"  role="button" title="please, click to delete Contact"  data-bs-toggle="modal" data-bs-target="#basicModal" onclick="myFunction({{$data1->id}})" ><i class="bi bi-x-circle"></i></a></td>
                                </tr>


                                @endforeach

                                </tbody>
                            </table>
                            <div class="card-body">

                                <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('product.destroy')}}" method="post">
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

@section('push_bofore_script')

<script>
    function myFunction(e) {
        let id = e;
        document.getElementById("id").value = id;
    }
</script>

@endsection
