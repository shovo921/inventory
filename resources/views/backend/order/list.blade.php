@extends('.backend.admin.layouts.master')

@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Recoginition Order list</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">Recoginition Order list</li>
                </ol>
            </nav>
        </div>

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation"> <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product in stock list apply</button></li>
                    <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Recognition Manualy apply</button></li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Recognition list</h5>
                                            <table class="table datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">price </th>
                                                    <th scope="col">Category name</th>
                                                    <th scope="col">Sub total</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                $number=1;
                                                ?>
                                                @foreach($data as $data1)
                                                    @php
                                                        $product =\App\Models\Product::where('id',$data1->product_id)->first();
                                                    @endphp
                                                    <tr>
                                                        <th scope="row">{{$number++ }}</th>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$data1->price }}</td>
                                                        <td>{{$product->category_name}}</td>
                                                        <td>{{$data1->sub_total}}</td>
                                                        <td>{{ $data1->quantity}}</td>
                                                        <td>
                                                            @if($data1->status ==1 )
                                                                <span class="badge bg-primary">Submitted</span>
                                                            @elseif($data1->status ==2)
                                                                <span class="badge bg-success">Approved</span>
                                                            @elseif($data1->status ==3)
                                                                <span class="badge bg-danger">Rejected</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if(($data1->status ==2))
                                                                <a href="{{ route('pdf.download', ['id' => $data1->id]) }}" type="button" class="btn btn-s btn-sm delete bg-success"  role="button" title="please, click to download gatepass"  ><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                                            @endif
                                                        <a class="btn btn-success btn-sm" href="{{ route('order.view', ['id' => $data1->id]) }}" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip on top"><i class="ri-edit-box-line"></i></a>
                                                            <a type="button" class="btn btn-danger btn-sm delete"  role="button" title="please, click to delete Contact"  data-bs-toggle="modal" data-bs-target="#basicModal" onclick="myFunction({{$data1->id}})" ><i class="bi bi-x-circle"></i></a></td>
                                                    </tr>


                                                @endforeach

                                                </tbody>
                                            </table>
                                            <div class="card-body">

                                                <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form action="{{route('recognition.destroy')}}" method="post">
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
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Recognition list</h5>
                                            <table class="table datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">title</th>
                                                    <th scope="col">description </th>
                                                    <th scope="col">quantity</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                $number=1;
                                                ?>
                                                @foreach($data2 as $data2)
                                                    <tr>
                                                        <th scope="row">{{$number++ }}</th>
                                                        <td>{{$data2->title}}</td>
                                                        <td>{{$data2->description}}</td>
                                                        <td>{{$data2->quantity}}</td>

                                                        <td>
                                                            @if($data2->status ==1 )
                                                                <span class="badge bg-primary">Submitted</span>
                                                            @elseif($data2->status ==2)
                                                                <span class="badge bg-success">Approved</span>
                                                            @elseif($data2->status ==3)
                                                                <span class="badge bg-bg-danger">Rejected</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if(($data2->status ==2))
                                                                <a href="{{ route('pdf.download', ['id' => $data2->id]) }}" type="button" class="btn btn-s btn-sm delete bg-success"  role="button" title="please, click to download gatepass"  ><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                                            @endif
                                                            <a class="btn btn-success btn-sm" href="{{ route('order.view', ['id' => $data2->id]) }}" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip on top"><i class="ri-edit-box-line"></i></a>
                                                            <a type="button" class="btn btn-danger btn-sm delete"  role="button" title="please, click to delete Contact"  data-bs-toggle="modal" data-bs-target="#basicModal" onclick="myFunction({{$data2->id}})" ><i class="bi bi-x-circle"></i></a></td>
                                                    </tr>


                                                @endforeach

                                                </tbody>
                                            </table>
                                            <div class="card-body">

                                                <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form action="{{route('recognition.destroy')}}" method="post">
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
                    </div>

                </div>
            </div>
        </div>

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
