<div class="container navpaddless">
    <div class="header">
        <nav class="navbar navbar-default bg-header">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">B.P.I Admin Gallery</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="@if($uril=='dashboard') active @endif"><a href="{{url('/dashboard')}}">Dashboard <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown @if($uril=='addimage')active @elseif($uril=='addvideo')active  @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add new <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="@if($uril=='addimage') active @endif"><a href="{{url('/addimage')}}">Image</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="@if($uril=='addvideo') active @endif"><a href="{{url('/addvideo')}}">Video</a></li>
                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>

                        <li class="dropdown @if($uril=='addadmin')active @elseif($uril=='adminInfo')active  @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Panel <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="@if($uril=='addadmin') active @endif"><a href="{{url('/addadmin')}}">Add new admin</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="@if($uril=='adminInfo') active @endif"><a href="{{url('/adminInfo')}}">Admin info</a></li>
                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>
                        <li class="@if($uril=='allGalleryImage') active @endif"><a href="{{url('/allGalleryImage')}}">All Image Info</a></li>
                        <li class="@if($uril=='allYoutubeVideo') active @endif"><a href="{{url('/allYoutubeVideo')}}">All Video Info</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{url('/login')}}" class="logout">Ashik | Log out</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>