
@extends('layouts.farmer.app')

@section('details')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Category Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Category</li>
                   <li class="breadcrumb-item active"><a href="#">Create Category</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->

   <!-- START: Card Data-->
   <div class="pull-right">
     
   </div>
   </br>
<link rel="stylesheet" href="{{ asset('sms/')}}/style.css">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-4">
                <div class="box box-warning direct-chat direct-chat-warning">
                   
                    <div class="box-body">
                        <div class="direct-chat-messages">
                            @foreach($messages as $row)
                            @if($row->type==0)
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left"> </span> <span class="direct-chat-timestamp pull-right"></span> </div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
                                @if($row->message==NULL)
                                 <img class="" src="{{asset($row->image)}}" style="height: 80px; width:80px; float: right;">
                                @else
                                <div class="direct-chat-text"> {{$row->message}}</div>
                                @endif
                            </div>
                            @else
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right"></span> <span class="direct-chat-timestamp pull-left"></span> </div> <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">
                                @if($row->message==NULL)
                                 <img class="" src="{{asset($row->image)}}" style="height: 80px; width:80px; float: right;">
                                @else
                                <div class="direct-chat-text"> {{$row->message}}</div>
                                @endif
                            </div>
                            @endif
                            @endforeach
                           
                        </div>
                    </div>
                    <div class="box-footer">
                       <form class="add-contact-form" method="post" action="{{ route('store.message') }}"enctype="multipart/form-data">    
                             @csrf
                             <input type="hidden" name="to" value="{{$user_id->id}}" class="form-control">
                             <input type="hidden" name="from" value="{{Auth::id()}}" class="form-control">
                            <div class="input-group"> <input type="text" name="message" placeholder="Type Message ..." class="form-control"> <span class="input-group-btn">
                                
                             <button type="submit" class="btn btn-lg btn-warning">Send</button> </span> </div>
                        </form>

                        </br>
                        <form class="add-contact-form" method="post" action="{{ route('store.message') }}"enctype="multipart/form-data">    
                             @csrf
                             <input type="hidden" name="to" value="{{$user_id->id}}" class="form-control">
                             <input type="hidden" name="from" value="{{Auth::id()}}" class="form-control">
                            <div class="input-group"> 
                                <input type="file" name="image"  class="form-control"> <span class="input-group-btn">
                                    
                                
                             <button type="submit" class="btn btn-warning btn-flat">Send</button> </span> </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
   <!-- END: Card DATA-->
</div>
</main>
@endsection