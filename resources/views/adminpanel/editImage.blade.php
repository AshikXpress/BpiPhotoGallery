@extends('masterlayout.adminlayout')
@section('content')
    <div class="common-area">
        <div class="common-head text-center">
            <h3>Update celebrational image</h3>
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
                    <form action="{{url('/updateImage/'.$image->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" value="{{$image->caption}}" class="form-control" name="caption" id="caption" placeholder="Enter caption">
                            <span class="text-danger">{{$errors->first('caption')}}</span>
                        </div>

                        <div class="form-group col-sm-6 padd-left">
                            <label for="year">Year</label>
                            <input type="text" value="{{$image->celebration_year}}" name="year" class="form-control some-element" placeholder="Pick date">
                            <span class="text-danger">{{$errors->first('year')}}</span>


                        </div>


                        <div class="form-group col-sm-6 padd-right">
                            <label for="celebration">celebration name</label>

                            <select class="form-control" name="celebration">

                                <option value="{{$image->celebration_name}}">{{$image->celebration_name}}</option>

                                <option value="languageDay">Language Martyrs' Day</option>
                                <option value="MujibBirth">Sheikh Mujibur Rahman's birthday</option>
                                <option value="IndependenceDay">Independence Day</option>
                                <option value="BengaliNewYear">Bengali New Year</option>
                                <option value="NationalFlagDay">National Flag Day</option>
                            </select>
                            <span class="text-danger">{{$errors->first('celebration')}}</span>

                        </div>

                        <div class="form-group">
                            <label for="descpt">Short description</label><br>
                            <textarea id="descpt" class="form-control" name="descpt" rows="3">{{$image->celebration_descpt}}</textarea>
                            <span class="text-danger">{{$errors->first('descpt')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>

                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection