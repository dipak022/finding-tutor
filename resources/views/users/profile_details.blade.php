

@extends('layouts.users.app')

@section('content')
    
</br>
</br>
</br>
</br>

<div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="wdt_100">
              <div class="prd_large_img"><span class="image_hover"><img src="{{asset($specialist->image)}}" alt="image" class="zoom_img_effect"></span></div>
              <div class="prd_detail_desc">
                <h3 class="black-color mar_btm18"> <span class="lytgreen-head">{{$specialist->name}}</span></h3>
                <p>Services :({{$specialist->categoty_name}})</p>
                <p>Email :{{$specialist->email}}</p>
                <p>Phone :{{$specialist->phone}}</p>
                <p>Phone :{{$specialist->details}}</p>
                <a href="#" class="view-all hvr-bounce-to-right shop_add_cart add_cart_second_btn">Message</a>
              </div>
            </div>
           
           
          </div>
    
    
@endsection