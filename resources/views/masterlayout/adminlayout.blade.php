<!DOCTYPE html>
<html lang="en">
@include('common.adminheader')
<body>
<div class="wrapper">
   @include('common.adminnavbar')

    <div class="container">
     @yield('content')
    </div>





    <div class="container">
        <div class="footer">

        </div>
    </div>
</div>

@include('common.adminfooter')

</body>
</html>