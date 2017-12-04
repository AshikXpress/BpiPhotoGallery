@extends('masterlayout.adminlayout')
@section('content')


    <div class="row">
        <div class="col-md-12 text-center">
            <h1>All Gallery Video Info</h1>

        </div>

    </div>
    <hr>


    <div class="row">

        <div class="col-md-9 content-boxshadow">
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

            </div>

            <div class="row">
                <div class="youtube-wrapper">
                    @foreach(array_chunk($allYoutubeVideo->all(),2) as $row)
                        <div class="row">
                    @foreach($row as $youtube)
                        <div class="col-md-6">
                            <div class="youtube-content">
                                <div class="youtube-size">
                                    <iframe src="https://www.youtube.com/embed/{{$youtube->youtube_id}}" frameborder="0" allowfullscreen></iframe>

                                </div>
                                <div class="btn btn-group">
                                    <a href="" class="btn btn-default"><i class="fa fa-eye-slash"></i></a>
                                    <a href="{{url('/editVideo/'.$youtube->id)}}" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#" onclick="return checkDelete('{{url('/videoDelete/'.$youtube->id)}}')" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                </div>
                                <span>{{$youtube->celebration_year}}</span>
                            </div>
                        </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
            </div>
            {{$allYoutubeVideo->links()}}
    </div>

<div class="col-md-3">
@include('common.adminsidebarvideo')
</div>
</div>



@endsection