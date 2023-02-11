@section('push_after_style')

    <link href="{{asset('backend/assets/css/simple-datatables.css')}}" rel="stylesheet">

@endsection


<div class="tab-pane fade" id="order-info">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Order list</h5>
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">price</th>
                            <th scope="col">payment</th>
                            <th scope="col">status</th>
                        </tr>
                        </thead>
                        <tbody>

                        @for ($x = 0; $x <= 20; $x++)

                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>Dynamic Division Officer</td>
                                <td>47</td>
                                <td>2011-04-19</td>
                            </tr>
                        @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('push_after_script')
    <link href="{{asset('backend/assets/css/simple-datatables.css')}}" rel="stylesheet">
    <script src="{{asset('backend/assets/js/simple-datatables.js')}}"></script>
    <script src="{{asset('backend/assets/js/tinymce.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
@endsection
