
@extends('layouts.master')




@section('content')
<div class="page-body">
<div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Recent Orders</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Ecommerce</li>
                    <li class="breadcrumb-item active">Recent Orders</li>
                  </ol>
                </div>
              </div>
            </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>New Orders</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#" data-bs-original-title="" title="">Processing</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>Shipped Orders</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-success btn-xs" href="#" data-bs-original-title="" title="">Shipped</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>Cancelled Orders</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#" data-bs-original-title="" title="">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-danger btn-xs" href="#" data-bs-original-title="" title="">Cancelled</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Datatable order history</h5>
            </div>
            <div class="card-body">
               <div class="order-history table-responsive">
                  <table class="table table-bordernone display" id="basic-1">
                     
                        
                           Prdouct
                           Prdouct name
                           Size
                           Color
                           Article number
                           Units
                           Price
                           <i class="fa fa-angle-down"></i>
                        
                     
                     
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/1.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Long Top</a>
                                 <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                              </div>
                           
                           M
                           Lavander
                           4215738
                           1
                           $21
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/13.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Fancy watch</a>
                                 <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                              </div>
                           
                           35mm
                           Blue
                           5476182
                           1
                           $10
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/4.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Man shoes</a>
                                 <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                              </div>
                           
                           8
                           Black &amp; white
                           1756457
                           1
                           $18
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/10.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Ledis side bag</a>
                                 <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                              </div>
                           
                           22cm x 18cm
                           Brown
                           7451725
                           1
                           $13
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/12.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Ledis Slipper</a>
                                 <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                              </div>
                           
                           6
                           Brown &amp; white
                           4127421
                           1
                           $6
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/3.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Fancy ledis Jacket</a>
                                 <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                              </div>
                           
                           Xl
                           Light gray
                           3581714
                           1
                           $24
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/2.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Ledis Handbag</a>
                                 <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                              </div>
                           
                           25cm x 20cm
                           Black
                           6748142
                           1
                           $14
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/15.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Iphone6 mobile</a>
                                 <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                              </div>
                           
                           10cm x 15cm
                           Black
                           5748214
                           1
                           $25
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/14.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Watch</a>
                                 <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                              </div>
                           
                           27mm
                           Brown
                           2471254
                           1
                           $12
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                        
                           <img class="img-fluid img-30" src="{{asset('assets/images/product/11.png')}}" alt="#">
                           
                              <div class="product-name">
                                 <a href="#" data-bs-original-title="" title="">Slipper</a>
                                 <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                              </div>
                           
                           6
                           Blue
                           8475112
                           1
                           $6
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        
                     
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


</div>
@endsection