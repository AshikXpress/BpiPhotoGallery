<!DOCTYPE html>
<html lang="en">
@include('common.adminheader')
<body>
<div class="login-wrapper">
    <div class="login-table">
        <div class="login-table-cell">
            <div class="container">
                @yield('content')
            </div>


        </div>
        </div>
    </div>

@include('common.adminfooter')

</body>
</html>