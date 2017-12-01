@extends('masterlayout.adminlayout')
@section('content')


        <div class="row">
            <div class="col-md-12 text-center">
                <h1>A Four Image Set</h1>

            </div>

        </div>
        <hr>
        <div class="row bg-p">
            <div class="gallery">
                @foreach($images as $image)
                    <div class="img-wrapper" >
                        <img class="example-image" src="{{url('gallery/'.$image->photo)}}" alt=""/>
                        <div class="wrap-table">
                            <div class="wrap-tbl-cell">
                                <div class="table-bell">
                                    <a class="example-image-link" href="{{url('gallery/'.$image->photo)}}" data-lightbox="example-set" data-title="{{$image->caption}}">
                                        <i class="fa fa-search" title="View"></i>

                                    </a>
                                    <a href=""><i class="fa fa-eye" title="Ditiles"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{$images->links()}}
            </div>
        </div>
        <hr>

@endsection