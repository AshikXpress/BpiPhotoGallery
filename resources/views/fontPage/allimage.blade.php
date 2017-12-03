@extends('masterlayout.fontpagelayout')
@section('content')

@foreach($allImage as $image)

    <div class="img-wrapper">
        <div class="preloader">
            <div class="loder-img"></div>
        </div>
        <img class="example-image" src="{{url('gallery/'.$image->photo)}}" alt="" />
        <div class="wrap-table">
            <div class="wrap-tbl-cell">
                <div class="table-bell">
                    <h4>{{$image->caption}}</h4>
                    <h6>{{$image->celebration_year}}</h6>

                    <a class="example-image-link" href="{{url('gallery/'.$image->photo)}}" data-lightbox="example-set" data-title="{{$image->caption.'<br>'.$image->celebration_year}}"> <i class="fa fa-search"></i>
                    </a>
                    {{--<a href=""><i class="fa fa-eye"></i></a>--}}

                    <div class="image-download">
                        <a href="{{url('gallery/'.$image->photo)}}" target="_blank"><i class="fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endforeach
<div class="row">
    <div class="col-md-12 text-center">
        {{$allImage->links()}}
    </div>
</div>







@endsection