@extends('masterlayout.adminlayout')
@section('content')
    <div class="common-area">
        <div class="common-head text-center">
            <h3>Admin data update</h3>

        </div>
        <div class="row">

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
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
                <div class="form-area">
                    <form action="{{url('/adminUpdate/'.$admin->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-6 padd-left">
                            <label for="first_name">First name</label>
                            <input type="text" value="{{$admin->first_name}}" class="form-control" name="first_name" id="first_name" placeholder="Enter first name">
                            <span class="text-danger">{{$errors->first('first_name')}}</span>
                        </div>
                        <div class="form-group col-sm-6 padd-right">
                            <label for="last_name">Last name</label>
                            <input type="text" value="{{$admin->last_name}}" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
                            <span class="text-danger">{{$errors->first('last_name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"  value="{{$admin->email}}" class="form-control" name="email" id="email" placeholder="Enter email address">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" value="{{old('password')}}" class="form-control" name="password" id="password" placeholder="Enter password">
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="retype_password">Retype Password</label>
                            <input type="password" value="{{old('password')}}" class="form-control" name="retype_password" id="retype_password" placeholder="Enter retype password">
                            <span class="text-danger">{{$errors->first('retype_password')}}</span>
                        </div>


                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>

                        <button type="submit" class="btn btn-default">Register</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection