@php
$setting=DB::table('settings')->first();

@endphp
@extends('layouts.users.app')

@section('content')
    
</br>
</br>
</br>
</br>
   <!-- Content_Section Start-->
   <div class="wdt_100 pad_94_100">
      <div class="container">
        <h3 class="black-color mar_btm1">Get In <span class="lytgreen-head">Touch</span></h3>
        <p class="cnt_txt">Any Problem Please Contact.</p>
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
            <form id="contact-form" method="post">
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="Name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" name="email" placeholder="Email" title="Please enter a valid email" required="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="subject" placeholder="Subject" required="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="message" name="message" type="text" rows="4" placeholder="Message" class="form-control contact_textarea"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="submit now" class="btn submit_now">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <div class="contact_info wdt_100">
              <ul>
                <li class="cnt_map_icon">
                  <p>{{$setting->address}}</p>
                </li>
                <li class="cnt_mail_icon">
                  <p class="cnt_fnt_14">{{$setting->email}}<br>                {{$setting->email_second}}</p>
                </li>
                <li class="cnt_call_icon">
                  <p class="cnt_fnt_18">{{$setting->phone}}<br>               {{$setting->phone_optional}}</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12 cnt_map_img">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Content_Section End-->
    
    
@endsection