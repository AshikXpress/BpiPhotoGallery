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
                    <a class="navbar-brand" href="#">Admin Gallery</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="@if($uril=='') active @endif"><a href="{{url('/')}}">Dashboard <span class="sr-only">(current)</span></a></li>
                        <li class="@if($uril=='addimage') active @endif"><a href="{{url('/addimage')}}">Add new image</a></li>

                        <li class="dropdown @if($uril=='addadmin')active @elseif($uril=='adminInfo')active @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Panel <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="@if($uril=='addadmin') active @endif"><a href="{{url('/addadmin')}}">Add new admin</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="@if($uril=='adminInfo') active @endif"><a href="{{url('/adminInfo')}}"><a href="{{url('/adminInfo')}}">Admin info</a></li>
                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/login')}}">Ashik | Logout</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>