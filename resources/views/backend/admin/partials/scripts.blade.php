@yield('push_bofore_script')

<script src="{{asset('backend/assets/js/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/js/echarts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/quill.min.js')}}"></script>
<script src="{{asset('backend/assets/js/simple-datatables.js')}}"></script>
<script src="{{asset('backend/assets/js/tinymce.min.js')}}"></script>
<script src="{{asset('backend/assets/js/validate.js')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
      integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
      crossorigin="anonymous" />
{{--<style>--}}

{{--    #toast-container > .toast-error { background-color: #BD362F; }--}}
{{--    #toast-container > .toast-message { background-color: #2ca02c; }--}}



{{--</style>--}}
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

@yield('push_after_script')
