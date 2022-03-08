@php
$img=DB::table('slider')->first();

@endphp
@extends('layouts.users.app')

@section('content')
    
</br>
</br>
</br>
</br>

    <div class="col-lg-12 col-md-12 col-sm-12  wdt_mar_t">
            <h3 class="black-color mar_btm40">Service <span class="lytgreen-head">Specialist</span></h3>
            <ul class="shop_prd_list">
              @foreach($specialist as $list)
              <li><span class="prd_img"><a href="#" class="image_hover"><img src="{{asset($list->image)}}" alt="image" class="zoom_img_effect"></a></span>
                <h6>{{$list->name}} ({{$list->categoty_name}})</h6><span class="prd_star_img"></span><a href="#" class="view-all hvr-bounce-to-right shop_add_cart">Appoinment</a> <a href="#" class="view-all hvr-bounce-to-right shop_add_cart">Appoinment</a>
              </li>
             @endforeach
            </ul>
            <div aria-label="Page navigation">
              <ul class="pagination">
                <!-- <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>-->
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true"><img src="{{asset('users/')}}/images/blog_page/next_icon.png"></span></a></li>
              </ul>
            </div>
          </div>
    
    
@endsection