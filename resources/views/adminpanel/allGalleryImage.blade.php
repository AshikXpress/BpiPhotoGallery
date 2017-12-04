@extends('masterlayout.adminlayout')
@section('content')


    <div class="row">
        <div class="col-md-12 text-center">
            <h1>All Gallery Image Info</h1>

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
                <div class="row">
                    @foreach(array_chunk($allGalleryImage->all(),3) as $row)
                        <div class="row">
                    <div class="image-wrapper">
                        @foreach($row as $image)
                            <div class="col-md-4 padd-less-chunk">
                                <div class="image-content">
                                    <div class="image-size">
                                        <img src="{{url('gallery/'.$image->photo)}}" alt="">
                                    </div>
                                    <div class="btn btn-group">
                                        <a href="" class="btn btn-default"><i class="fa fa-eye-slash"></i></a>
                                        <a href="{{url('/editImage/'.$image->id)}}" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#" onclick="return checkDelete('{{url('/imageDelete/'.$image->id)}}')" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <span>{{$image->celebration_year}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                        </div>
                    @endforeach
                </div>
            </div>
            {{$allGalleryImage->links()}}
        </div>
        <div class="col-md-3">
            @include('common.adminsidebarimage')
        </div>
    </div>


@endsection