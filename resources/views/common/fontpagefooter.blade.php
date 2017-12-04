

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript">
    (function($){
        $(window).on("load",function(){
            $(".inner-area").mCustomScrollbar({
                scrollButtons:{enable:true,scrollType:"stepped"},
                keyboard:{scrollType:"stepped"},
                mouseWheel:{scrollAmount:188,normalizeDelta:true},
                theme:"rounded-dark",
                autoExpandScrollbar:true,
                snapAmount:188,
                snapOffset:20
            });
        });
        $(window).on("load",function(){
            $(".preloader").fadeOut(5000);
        });



    })(jQuery);
</script>