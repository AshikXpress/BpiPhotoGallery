@extends('masterlayout.adminlayout')
@section('content')


    <div class="row">
        <div class="col-md-12 text-center">
            <h1>All Gallery Video Info</h1>

        </div>

    </div>
    <hr>


    <div class="row">

        <div class="col-md-8 content-boxshadow">
            <div class="allimagepanel text-center">
                <h4> @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('error')}}
                        </div>
                    @endif
                </h4>
                <ul>

                    <li class="col-md-12">
                        View more details or modification content
                    </li>
                    @foreach($allYoutubeVideo as $youtube)

                        <li class="col-sm-3 margin-top-add xs-border-custom">{{$youtube->celebration_year}}</li>
                        <li class="col-sm-5 margin-top-add xs-border-custom">{{$youtube->celebration_name}}</li>
                        <li class="col-sm-4 margin-top-add border-right-action">{{$youtube->youtube_id}}</li>
                        {{--<li class="col-md-4 col-sm-4 border-right-action">--}}
                            {{--<div class="btn btn-group">--}}
                                {{--<a href="" class="btn btn-default"><i class="fa fa-eye-slash"></i></a>--}}
                                {{--<a href="{{url('/editImage/'.$image->id)}}" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>--}}
                                {{--<a href="#" onclick="return checkDelete('{{url('/imageDelete/'.$image->id)}}')" class="btn btn-danger"><i class="fa fa-remove"></i></a>--}}
                            {{--</div>--}}
                        {{--</li>--}}



                    @endforeach

                </ul>
            </div>
            {{$allYoutubeVideo->links()}}
            <div class="row">
                @foreach($allYoutubeVideo as $youtube)
                    <div class="col-md-6">
                        <div class="youtube-size">
                            <iframe src="https://www.youtube.com/embed/{{$youtube->youtube_id}}" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-4">
            <div class="celebration-list">
                <h3>All celebration category</h3>
                <ul>
                    <li class="@if($uril=='allYoutubeVideo') active @endif"><a href="{{url('/allYoutubeVideo')}}">All</a></li>
                    <li><a href="">Language Martyrs' Day</a></li>
                    <li><a href="">Sheikh Mujibur Rahman's birthday</a></li>
                    <li><a href="">Independence Day</a></li>
                    <li><a href="">Bengali New Year</a></li>
                    <li><a href="">National Flag Day</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu1</a></li>
                </ul>
            </div>
        </div>
    </div>



@endsection