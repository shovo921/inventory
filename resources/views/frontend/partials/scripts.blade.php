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

@yield('push_after_script')
