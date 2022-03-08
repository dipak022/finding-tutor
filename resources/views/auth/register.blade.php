



@extends('layouts.users.app')

@section('content')
    
       <!-- Content_Section Start-->
       <div class="wdt_100 pad_100_85">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="return_gray_col">Already have an account? <a href="{{ route('login') }}">Click here to login</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="black-color mar_btm40">Create  <span class="lytgreen-head">Account</span></h3>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                @csrf
                    <fieldset id="account">
                       
                       
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="First Name" id="input-firstname" class="form-control" name="name" required="">
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" placeholder="E-Mail" id="input-email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Account Type</label>
                            <div class="col-sm-10">
                                <select  name="user_roll" class="form-control">
                                    <option disabled="" selected=""> Please Select Account Type</option>
                                    <option value="2">Farmer </option>
                                    <option value="3">Farmer Specialist</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" id="input-password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password Confirm" id="input-confirm" class="form-control" name="password_confirmation">
                            </div>
                        </div>   
                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right"><a href="#" class="agree"><b></b></a>
                            <button type="submit" class="btn btn-primary">Registaer</button>
                        </div>
                    </div>
                </form>
          </div>
     
        </div>
      </div>
    </div>
    <!-- Content_Section End-->
   
    
@endsection

