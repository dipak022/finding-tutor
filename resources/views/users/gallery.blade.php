@php
$img=DB::table('slider')->first();

@endphp
@extends('layouts.users.app')

@section('content')
    
</br>
</br>
</br>
</br>

    <!-- Content_Section Start-->
    <div class="pad_84_70 wdt_100">
      <div class="container">
        <div class="row">
          <div class="filter-section">
            <div class="col-sm-12 col-xs-12">
              <div class="filter-container isotopeFilters">
                <ul class="list-inline filter">
                  <li class="active"><a>All Gallery</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <!-- /nimble-portfolio-filter-->
          <div class="portfolio-section port-col">
            <div class="isotopeContainer">
              <div class="col-sm-4 isotopeSelector garden">
                <div>
                  <figure><img src="{{asset($img->slider_1)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                          
                        </div>
                        <!-- <div class="inner-overlay-content with-icons"> <a title="First Image" class="fancybox-pop"  href="images/gallery_page/gallery_img1.jpg"><i class="fa fa-search"></i></a> <a title="Second Image"  class="fancybox-pop" style="display: none" href="images/gallery_page/gallery_img8.jpg" ></a> <a title="Third Image"  class="fancybox-pop" style="display: none" href="images/gallery_page/gallery_img9.jpg" ></a> <a href="#"><i class="fa fa-link"></i></a> </div>-->
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector pond">
                <div>
                  <figure><img src="{{asset($img->slider_2)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                         
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector patio">
                <div>
                  <figure><img src="{{asset($img->slider_3)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                     
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector rockwall">
                <div>
                  <figure><img src="{{asset($img->slider_4)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                        
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector garden">
                <div>
                  <figure><img src="{{asset($img->slider_5)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                         
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector pond">
                <div>
                  <figure><img src="{{asset($img->slider_6)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                        
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector patio">
                <div>
                  <figure><img src="{{asset($img->slider_7)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                         
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector adoption rockwall">
                <div>
                  <figure><img src="{{asset($img->slider_8)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                         
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-sm-4 isotopeSelector education garden">
                <div>
                  <figure><img src="{{asset($img->slider_2)}}" alt="image">
                    <div class="overlay-background">
                      <div class="inner"></div>
                    </div>
                    <div class="overlay">
                      <div class="inner-overlay">
                        <div class="inner_cnt">
                         
                        </div>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <!-- /nimble-portfolio-->
        </div>
      </div>
    </div>
    <!-- Content_Section End-->
    
    
@endsection