



@extends('layouts.users.app')

@section('content')
    
       <!-- Content_Section Start-->
       <div class="wdt_100 pad_100_85">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="return_gray_col">Do not have an account? <a href="{{ route('register') }}">Click here to Register</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="black-color mar_btm40">Login  <span class="lytgreen-head">Account</span></h3>
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">        
                              @csrf
                                <div class="col-sm-12 customer-login">
                                    <div class="well">
                                       
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="text" name="email" value="" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="input-password">Password</label>
                                            <input type="password" name="password" value="" id="input-password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="bottom-form">
                                        <a href="#" class="forgot">Forgotten Password</a>
                                        <input type="submit" value="Login" class="btn btn-default pull-right" />
                                    </div>
                                </div>
                            </form>
          </div>
     
        </div>
      </div>
    </div>
    <!-- Content_Section End-->
   
    
@endsection

 