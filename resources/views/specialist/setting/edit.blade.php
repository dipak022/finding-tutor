
@php
$category =DB::table('category')->get();
@endphp
@extends('layouts.farmer.app')

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
                              
                                <form class="add-contact-form" method="post" action="{{ url('specialist/update/'.$specialist->id) }}"enctype="multipart/form-data">    
                                    @csrf
                                
                              
                                    
                                
                                  

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Name</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='name' value="{{ $specialist->name}}"/>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Email</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='email' value="{{ $specialist->email}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Phone</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='phone' value="{{ $specialist->phone}}"/>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Specialist</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                      <select class="form-control" name="specialist_id">
                                        <option selected disabled>Select Specialist</option>
                                        @foreach($category as $row)
                                        <option value="{{ $row->id }}"> {{ $row->categoty_name }} </option>
                                        @endforeach
                                    </select>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Description Me</span></label>
                                    <div class="col-sm-8 offset-right-2">

                                            <div class="modal-body">    
                                                <div class="card">
                                                <div class="card-header d-flex justify-content-between align-items-center">                               
                                                    <h4 class="card-title"> Description Me</h4>                                   
                                                </div>
                                                <div class="card-body">
                                                    <textarea  class="summernote" required name="details">{{$specialist->details}}</textarea>
                                                </div>
                                            </div>
                                            
                                    </div>
                                    </div>
                                  </div>

                          




                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Image</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="file" class="form-control" id="Brand Logo" placeholder="Brand Logo" name="image">
                                    </div>
                                  </div> 
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>Old Image</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <img class="" src="{{asset($specialist->image)}}" style="height: 80px; width:80px; float: right;">  
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