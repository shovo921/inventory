@extends('.backend.admin.layouts.master')

@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>User list</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

                    <li class="breadcrumb-item active">User list</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User list</h5>
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>

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
                                        <td>{{$data1->email }}</td>
                                        <td>{{$data1->role_name}}</td>



                                @endforeach

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

