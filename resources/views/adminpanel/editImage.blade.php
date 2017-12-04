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
                                <option value="a">ডিজিটাল উদ্ভাবনী মেলা</option>
                                <option value="b">শহীদ ও আন্তর্জাতিক মাতৃভাষা দিবস</option>
                                <option value="c">বার্ষিক ক্রীড়া প্রতিযোগিতা</option>
                                <option value="d">বঙ্গবন্ধুর জন্ম বার্ষিকী ও শিশু দিবস</option>
                                <option value="e">স্বাধীনতা দিবস</option>
                                <option value="f">রোভার কুচকাওয়াজ  অংশগ্রহণ</option>
                                <option value="g">জাতীয় হ্যাকাথন মেলা অংশগ্রহণ</option>
                                <option value="h">বার্ষিক তাঁবুবাস ও দীক্ষা অনুষ্ঠান</option>
                                <option value="i">পহেলা বৈশাখ</option>
                                <option value="j">মজিবনগর দিবস</option>
                                <option value="k">জব ফেয়ার ও সেমিনার</option>
                                <option value="l">আন্তঃকক্ষ ক্রীড়া প্রতিযোগিতা</option>
                                <option value="m">ইফ্তার মাহফিল</option>
                                <option value="n">জাতিয় শোক দিবস</option>
                                <option value="o">ছাত্র/ছাত্রীদের ওরিয়েন্টেশন ক্লাস</option>
                                <option value="p">ছাত্র/ছাত্রীদের প্রতিনিধি পরিষদ আলোচনা অনুষ্ঠান</option>
                                <option value="q">সন্ত্রাস ও জঙ্গি বিরোধী মানববন্ধন ও সভা</option>
                                <option value="r">শ্রেষ্ঠ পলিটেকনিক নির্বাচিত ও আনন্দ র‌্যালি</option>
                                <option value="s">সাহিত্য,সংস্কৃতি ও বিতর্ক অনুষ্ঠান</option>
                                <option value="t">নবীন বরণ অনুষ্ঠান</option>
                                <option value="u">বার্ষিক ধর্মীয় প্রতিযোগিতা</option>
                                <option value="v">বিদায় ও দোয়া মাহফিল অনুষ্ঠান</option>
                                <option value="w">স্কিল কম্পিটিশন ও র‌্যালি</option>
                                <option value="x">মহান বিজয় দিবস</option>
                                <option value="y">অন্যান্য</option>

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