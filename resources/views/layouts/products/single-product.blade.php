@extends('layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/rating.css')}}">
@endsection



@section('content')
<div class="page-body">
    <div class="container-fluid">        
                <div class="page-title">
                <div class="row">
                    <div class="col-6">
                    <h3>Product Page</h3>
                    </div>
                    <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Product Page</li>
                    </ol>
                    </div>
                </div>
                </div>
    </div>
<div class="container-fluid">
   <div>
      <div class="row product-page-main p-0">
         <div class="col-xl-4 xl-cs-65 box-col-12">
            <div class="card">
               <div class="card-body">
                  <div class="product-slider owl-carousel owl-theme owl-loaded owl-drag" id="sync1">
                     
                     
                     
                     
                     
                     
                     
                     
                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1966px, 0px, 0px); transition: all 0.1s ease 0s; width: 7867px;"><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/05.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/06.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/07.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/08.jpg')}}" alt=""></div></div><div class="owl-item active" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/05.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/06.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/07.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/08.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div></div><div class="owl-item cloned" style="width: 491.648px;"><div class="item"><img src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev" data-bs-original-title="" title=""><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next" data-bs-original-title="" title=""><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                  <div class="owl-carousel owl-theme owl-loaded owl-drag" id="sync2">
                     
                     
                     
                     
                     
                     
                     
                     
                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 1014px;"><div class="owl-item current active" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div></div><div class="owl-item active" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div></div><div class="owl-item active" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div></div><div class="owl-item active" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/05.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/06.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/07.jpg')}}" alt=""></div></div><div class="owl-item" style="width: 111.662px; margin-right: 15px;"><div class="item"><img src="{{asset('assets/images/ecommerce/08.jpg')}}" alt=""></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev" data-bs-original-title="" title=""><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next" data-bs-original-title="" title=""><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
               </div>
            </div>
         </div>
         <div class="col-xl-5 xl-100 box-col-6">
            <div class="card">
               <div class="card-body">
                  <div class="product-page-details">
                     <h3>Women Pink shirt.</h3>
                  </div>
                  <div class="product-price">$26.00  
                     <del>$350.00 </del>
                  </div>
                  <ul class="product-color">
                     <li class="bg-primary"></li>
                     <li class="bg-secondary"></li>
                     <li class="bg-success"></li>
                     <li class="bg-info"></li>
                     <li class="bg-warning"></li>
                  </ul>
                  <hr>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                  <hr>
                  <div>
                     <table class="product-page-width">
                        <tbody>
                           <tr>
                              <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                              <td>Pixelstrap</td>
                           </tr>
                           <tr>
                              <td> <b>Availability &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                              <td class="txt-success">In stock</td>
                           </tr>
                           <tr>
                              <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                              <td>ABC</td>
                           </tr>
                           <tr>
                              <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                              <td>Cotton</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-6">
                        <h6 class="product-title">share it</h6>
                     </div>
                     <div class="col-md-6">
                        <div class="product-icon">
                           <ul class="product-social">
                              <li class="d-inline-block"><a href="#" data-bs-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
                              <li class="d-inline-block"><a href="#" data-bs-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
                              <li class="d-inline-block"><a href="#" data-bs-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
                              <li class="d-inline-block"><a href="#" data-bs-original-title="" title=""><i class="fa fa-instagram"></i></a></li>
                              <li class="d-inline-block"><a href="#" data-bs-original-title="" title=""><i class="fa fa-rss"></i></a></li>
                           </ul>
                           <form class="d-inline-block f-right"></form>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-6">
                        <h6 class="product-title">Rate Now</h6>
                     </div>
                     <div class="col-md-6">
                        <div class="d-flex">
                           <div class="br-wrapper br-theme-fontawesome-stars"><select id="u-rating-fontawesome" name="rating" autocomplete="off" style="display: none;">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current" data-bs-original-title="" title=""></a><a href="#" data-rating-value="2" data-rating-text="2" data-bs-original-title="" title=""></a><a href="#" data-rating-value="3" data-rating-text="3" data-bs-original-title="" title=""></a><a href="#" data-rating-value="4" data-rating-text="4" data-bs-original-title="" title=""></a><a href="#" data-rating-value="5" data-rating-text="5" data-bs-original-title="" title=""></a></div></div>
                           <span>(250 review)</span>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="m-t-15">
                     <button class="btn btn-primary m-r-10" type="button" title="" data-bs-original-title=""> <i class="fa fa-shopping-basket me-1"></i>Add To Cart</button>
                     <button class="btn btn-success m-r-10" type="button" title="" data-bs-original-title=""> <i class="fa fa-shopping-cart me-1"></i>Buy Now</button><a class="btn btn-secondary" href="#" data-bs-original-title="" title=""> <i class="fa fa-heart me-1"></i>Add To WishList</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 xl-cs-35 box-col-6">
            <div class="card">
               <div class="card-body">
                  <!-- side-bar colleps block stat-->
                  <div class="filter-block">
                     <h4>Brand</h4>
                     <ul>
                        <li>Clothing</li>
                        <li>Bags</li>
                        <li>Footwear</li>
                        <li>Watches</li>
                        <li>ACCESSORIES</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body">
                  <div class="collection-filter-block">
                     <ul class="pro-services">
                        <li>
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                              <div class="media-body">
                                 <h5>Free Shipping                                    </h5>
                                 <p>Free Shipping World Wide</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                              <div class="media-body">
                                 <h5>24 X 7 Service                                    </h5>
                                 <p>Online Service For New Customer</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                              <div class="media-body">
                                 <h5>Festival Offer                                 </h5>
                                 <p>New Online Special Festival</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                              <div class="media-body">
                                 <h5>Online Payment                                  </h5>
                                 <p>Contrary To Popular Belief.                                   </p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- silde-bar colleps block end here-->
            </div>
         </div>
      </div>
   </div>
   <div class="card">
      <div class="row product-page-main">
         <div class="col-sm-12">
            <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false" data-bs-original-title="" title="">Febric</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false" data-bs-original-title="" title="">Video</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true" data-bs-original-title="" title="">Details</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true" data-bs-original-title="" title="">Brand</a>
                  <div class="material-border"></div>
               </li>
            </ul>
            <div class="tab-content" id="top-tabContent">
               <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                  <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                  <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               </div>
               <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
               <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
               <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/ecommerce.js')}}"></script>
@endsection