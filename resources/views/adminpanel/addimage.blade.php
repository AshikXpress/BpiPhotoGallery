@extends('masterlayout.adminlayout')
@section('content')
    <div class="common-area">
        <div class="common-head text-center">
            <h3>Insert new celebrational image</h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-area">
                    <form>
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" class="form-control" name="caption" id="caption" placeholder="Enter caption">
                        </div>

                        <div class="form-group col-md-6 padd-left">
                            <label for="year">Date of year</label>
                            <input type="text" name="year" class="form-control some-element" placeholder="Pick date">
                            <!--  <i class="fa fa-calendar" aria-hidden="true"></i> -->

                        </div>


                        <div class="form-group col-md-6 padd-right">
                            <label for="celebration">celebration name</label>
                            <select class="form-control" name="celebration">
                                <option value="" selected disabled hidden>Choose celebration</option>
                                <option value="">Language Martyrs' Day</option>
                                <option value="">Sheikh Mujibur Rahman's birthday</option>
                                <option value="">Independence Day</option>
                                <option value="">Bengali New Year</option>
                                <option value="">National Flag Day</option>


                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Short description</label><br>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection