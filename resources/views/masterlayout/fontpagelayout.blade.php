<!DOCTYPE html>
<html lang="en">
<head>
@include('common.fontpageheader')
<body>

@include('common.fontpagesidebar')
<div class="image-gallery-area">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="gallery">
                @yield('content')
            </div>
        </div>
    </div>
</div>




@include('common.fontpagefooter')
</body>
</html>