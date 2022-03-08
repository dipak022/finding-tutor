@extends('layouts.users.app')

@section('content')
    
</br>
</br>
</br>
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
                                <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">{{$row->name}}</span> <span class="direct-chat-timestamp pull-right">{{$row->name}}</span> </div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
                                @if($row->message==NULL)
                                 <img class="" src="{{asset($row->image)}}" style="height: 80px; width:80px; float: right;">
                                @else
                                <div class="direct-chat-text"> {{$row->message}}</div>
                                @endif
                            </div>
                            @else
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">{{$row->name}}</span> <span class="direct-chat-timestamp pull-left">{{$row->name}}</span> </div> <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">
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
                            <div class="input-group"> 
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control"> <span class="input-group-btn">
                                    
                                
                             <button type="submit" class="btn btn-warning btn-flat">Send</button> </span> </div>
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
    
    
@endsection