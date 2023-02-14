@yield('push_bofore_script')

<!-- Scripts -->

<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('frontend/assets/js/animation.js')}}"></script>
<script src="{{asset('frontend/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

<script>
    // Acc
    $(document).on("click", ".naccs .menu div", function() {
        var numberIndex = $(this).index();
        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");
            $(this).addClass("active");
            $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
        }
    });
</script>
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

{{--website inspact mode disable--}}
{{--<script>--}}
{{--    // Disable right-click--}}
{{--    document.addEventListener('contextmenu', (e) => e.preventDefault());--}}

{{--    function ctrlShiftKey(e, keyCode) {--}}
{{--        return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);--}}
{{--    }--}}

{{--    document.onkeydown = (e) => {--}}
{{--        // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U--}}
{{--        if (--}}
{{--            event.keyCode === 123 ||--}}
{{--            ctrlShiftKey(e, 'I') ||--}}
{{--            ctrlShiftKey(e, 'J') ||--}}
{{--            ctrlShiftKey(e, 'C') ||--}}
{{--            (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))--}}
{{--        )--}}
{{--            return false;--}}
{{--    };--}}
{{--</script>--}}

@yield('push_after_script')
