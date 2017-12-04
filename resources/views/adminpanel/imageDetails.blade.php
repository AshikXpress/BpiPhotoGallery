@extends('masterlayout.adminlayout')
@section('content')


    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Gallery Image Details Info</h1>

        </div>

    </div>
    <hr>


    <div class="row">

        <div class="col-md-9 content-boxshadow">
            <div class="allimagepanel">

                <div class="row">
                   <div class="col-md-12">
                       <div class="image-details-content">
                           <h4>{{$imageDetails->caption}}</h4>
                            <div class="image-details">

                                <div class="preloader">
                                    <div class="loder-img"></div>
                                </div>
                                <img src="{{url('gallery/'.$imageDetails->photo)}}" alt="">

                            </div>
                           <p>{{$imageDetails->celebration_year}}</p>
                           <article>{{$imageDetails->celebration_descpt}}</article>
                       </div>
                   </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            @include('common.adminsidebarimage')
        </div>
    </div>


@endsection