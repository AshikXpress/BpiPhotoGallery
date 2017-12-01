<!DOCTYPE html>
<html lang="en">
@include('common.adminheader')
<body>
<div class="wrapper">
   @include('common.adminnavbar')

    <div class="container nav-width">
     @yield('content')
    </div>





    <div class="container nav-width">
        <div class="footer">

        </div>
    </div>
</div>

@include('common.adminfooter')

</body>
</html>