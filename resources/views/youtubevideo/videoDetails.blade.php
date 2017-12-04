@extends('masterlayout.adminlayout')
@section('content')


    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Gallery Video Info Details</h1>

        </div>

    </div>
    <hr>


    <div class="row">

        <div class="col-md-9 content-boxshadow">
            <div class="allimagepanel text-center">


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="youtube-size-del">
                        <h4>{{$videoDetails->caption}}</h4>
                        <div class="del-pre">
                            <div class="preloader">
                                <div class="loder-img"></div>
                            </div>
                         <iframe src="https://www.youtube.com/embed/{{$videoDetails->youtube_id}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p>{{$videoDetails->celebration_year}}</p>
                        <article>{{$videoDetails->celebration_descpt}}</article>

                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3">
            @include('common.adminsidebarvideo')
        </div>
    </div>



@endsection