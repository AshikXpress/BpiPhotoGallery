@extends('masterlayout.adminlayout')
@section('content')
    <div class="common-area">
        <div class="common-head text-center">
            <h3>Embedded new celebrational Video</h3>
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
                    <form action="{{url('/addvideo')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" value="{{old('caption')}}" class="form-control" name="caption" id="caption" placeholder="Enter caption">
                            <span class="text-danger">{{$errors->first('caption')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" value="{{old('year')}}" name="year" class="form-control some-element" placeholder="Pick date">
                            <span class="text-danger">{{$errors->first('year')}}</span>


                        </div>


                        <div class="form-group">
                            <label for="celebration">celebration name</label>

                            <select class="form-control" name="celebration">

                                <option value="{{old('celebration')}}">{{old('celebration')}}</option>

                                <option selected disabled hidden>Choose celebration</option>
                                <option value="languageDay">Language Martyrs' Day</option>
                                <option value="MujibBirth">Sheikh Mujibur Rahman's birthday</option>
                                <option value="IndependenceDay">Independence Day</option>
                                <option value="BengaliNewYear">Bengali New Year</option>
                                <option value="NationalFlagDay">National Flag Day</option>
                            </select>
                            <span class="text-danger">{{$errors->first('celebration')}}</span>

                        </div>
                        <div class="form-group">
                            <label for="youtube_id">Youtube video id</label>
                            <input type="text" value="{{old('youtube_id')}}" name="youtube_id" class="form-control" placeholder="http://www.youtube.com/watch?v=....">
                            <span class="text-danger">{{$errors->first('youtube_id')}}</span>


                        </div>

                        <div class="form-group">
                            <label for="descpt">Short description</label><br>
                            <textarea id="descpt" class="form-control" name="descpt" rows="3">{{old('descpt')}}</textarea>
                            <span class="text-danger">{{$errors->first('descpt')}}</span>
                        </div>



                        <button type="submit" class="btn btn-default">Embedded</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection