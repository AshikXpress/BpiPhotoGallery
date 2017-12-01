@extends('masterlayout.adminlayout')
@section('content')
    <div class="common-area">
        <div class="common-head text-center">
            <h3>Admin Information</h3>

        </div>
        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
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
            <div class="smallScroll">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <td>Sl</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Photo</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$admin->first_name .' '.$admin->last_name}}</td>
                                <td>{{$admin->email}}</td>
                                <td><img src="{{url('admin_photo/'.$admin->photo)}}" alt=""></td>
                                <td>
                                    <div class="btn btn-group">
                                      <a class="btn btn-info" href="{{url('/adminEdit/'.$admin->id)}}">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="return checkDelete('{{url('/adminDelete/'.$admin->id)}}')">Delete</a>
                                    </div>
                                </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{$admins->links()}}
            </div>
        </div>


    </div>

@endsection