
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Service Product Edit</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Service Product</li>
                   <li class="breadcrumb-item active"><a href="#">Edit</a></li>
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
                   <h4 class="card-title">Service Product Edit</h4>                                
               </div>
               <div class="card-content">
                   <div class="card-body">
                       <div class="row">                                           
                           <div class="col-12">
                              
                                <form class="add-contact-form" method="post" action="{{ url('admin/update/category/'.$category->id) }}"enctype="multipart/form-data">    
                                    @csrf
                                
                              
                                    
                                   <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 offset-1 col-form-label"><span>categoty name</span></label>
                                    <div class="col-sm-8 offset-right-2">
                                    
                                     <input type="text" class="form-control" name='categoty_name' value="{{ $category->categoty_name}}"/>
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
                                    
                                     <img class="" src="{{asset($category->logo)}}" style="height: 80px; width:80px; float: right;">  
                                    </div>
                                  </div>
                                  
                                   
                                   <div class="form-group row pull-right">
                                       <div class="col-sm-10 ">
                                           <button type="submit" class="btn btn-primary">Update Category</button>  
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