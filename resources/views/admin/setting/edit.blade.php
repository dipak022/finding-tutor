
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Update settings</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">settings</li>
                   <li class="breadcrumb-item active"><a href="#">Update</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->

   <!-- START: Card Data-->
   <div class="row">
       <div class="col-12 col-lg-12 mt-3">
           <div class="card">
               <div class="card-header">                               
                   <h4 class="card-title">settings  Update</h4>                                
               </div>
               <div class="card-content">
                   <div class="card-body">
                       <div class="row">                                           
                           <div class="col-12">
                              
                                <form class="add-contact-form" method="post" action="{{ url('admin/update/settings/'.$settings->id) }}"enctype="multipart/form-data">    
                                    @csrf
                                
                              
                                    
                                
                                  

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Email</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='email' value="{{ $settings->email}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Second Email</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='email_second' value="{{ $settings->email_second}}"/>
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Firstphone</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='phone' value="{{ $settings->phone}}"/>
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Second phone</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='phone_optional' value="{{ $settings->phone_optional}}"/>
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> address</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='address' value="{{ $settings->address}}"/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Facebook</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='facebook' value="{{ $settings->facebook}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Twitter</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='twitter' value="{{ $settings->twitter}}"/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Link Din</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='linkdin' value="{{ $settings->linkdin}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Google</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='google' value="{{ $settings->google}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span> Off DAy</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='off_day' value="{{ $settings->off_day}}"/>
                                    </div>
                                  </div>




                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Logo</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="logo">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Logo</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($settings->logo)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>
                                  
                                   
                                   <div class="form-group row pull-right">
                                       <div class="col-sm-10 ">
                                           <button type="submit" class="btn btn-primary">Update Information</button>  
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>


</div>
</main>

  

@endsection