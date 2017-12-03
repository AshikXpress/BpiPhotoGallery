@extends('masterlayout.loginlayout')
@section('content')
   <div class="row">
       <div class="col-md-5 col-md-offset-3">
           <div class="common-area login-area">
               <div class="common-head">
                   <h3>LOGIN</h3>
               </div>
               <div class="row">
                   <div class="col-sm-10 col-sm-offset-1">
                       <div class="form-area">
                           <form>
                               <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                               </div>
                               <div class="form-group">
                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                               </div>

                               <a href="{{url('/dashboard')}}"  class="btn btn-default">LOGIN</a>
                               <button type="submit"  class="btn btn-default">LOGIN</button>
                           </form>
                       </div>
                   </div>
               </div>


           </div>
       </div>
   </div>

@endsection