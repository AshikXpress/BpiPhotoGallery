
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/datepicker.min.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script type="text/javascript">
    const picker = datepicker('.some-element');


    function checkDelete(url) {
//        var check = confirm('Are you sure delete this?');
//        if(check){
//            return true;
//        }else {
//            return false;
//        }


        swal({
            title: 'Are you sure sir?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            window.location.href = url;
            //                swal(
            //                    'Deleted!',
            //                    'Your file has been deleted.',
            //                    'success'
            //                )
        })


    }
</script>
<script type="text/javascript">
    (function($){

        $(window).on("load",function(){
            $(".preloader").fadeOut(5000);
        });



    })(jQuery);
</script>