
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
                              
                                <form class="add-contact-form" method="post" action="{{ url('admin/update/slider/'.$slider->id) }}"enctype="multipart/form-data">    
                                    @csrf
                                
                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image One</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_1">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old  Image One</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_1)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Two</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo"  name="slider_2">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Two</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_2)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Three</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_3">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Three</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_3)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Four</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_4">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Four</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_4)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                      <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Five</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_5">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Five</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_5)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                      <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Six</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_6">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Six</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_6)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                      <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Seven</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_7">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Seven</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_7)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>

                                        <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image Eight</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="slider_8">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image Eight</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($slider->slider_8)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                    </div>

                                   <div class="form-group row pull-right">
                                       <div class="col-sm-10 ">
                                           <button type="submit" class="btn btn-primary">Update Slider</button>  
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