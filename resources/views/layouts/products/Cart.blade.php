@extends('layouts.master')




@section('content')
<div class="page-body">
<div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Cart</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Ecommerce</li>
                    <li class="breadcrumb-item active">Cart</li>
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
               <h5>Cart</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="order-history table-responsive wishlist">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Prdouct</th>
                              <th>Prdouct Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Action</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><img class="img-fluid img-40" src="{{asset('assets/images/product/1.png')}}" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#" data-bs-original-title="" title="">Long Top</a></div>
                              </td>
                              <td>$21</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group bootstrap-touchspin">
                                       <button class="btn btn-primary btn-square bootstrap-touchspin-down" type="button" data-bs-original-title="" title=""><i class="fa fa-minus"></i></button><span class="input-group-text bootstrap-touchspin-prefix" style="display: none;"></span><input class="touchspin text-center form-control" type="text" value="5" style="display: block;" data-bs-original-title="" title=""><span class="input-group-text bootstrap-touchspin-postfix" style="display: none;"></span><button class="btn btn-primary btn-square bootstrap-touchspin-up" type="button" data-bs-original-title="" title=""><i class="fa fa-plus"></i></button>
                                    </div>
                                 </fieldset>
                              </td>
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td><img class="img-fluid img-40" src="{{asset('assets/images/product/13.png')}}" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#" data-bs-original-title="" title="">Fancy watch</a></div>
                              </td>
                              <td>$50</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group bootstrap-touchspin">
                                       <button class="btn btn-primary btn-square bootstrap-touchspin-down" type="button" data-bs-original-title="" title=""><i class="fa fa-minus"></i></button><span class="input-group-text bootstrap-touchspin-prefix" style="display: none;"></span><input class="touchspin text-center form-control" type="text" value="5" style="display: block;" data-bs-original-title="" title=""><span class="input-group-text bootstrap-touchspin-postfix" style="display: none;"></span><button class="btn btn-primary btn-square bootstrap-touchspin-up" type="button" data-bs-original-title="" title=""><i class="fa fa-plus"></i></button>
                                    </div>
                                 </fieldset>
                              </td>
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td><img class="img-fluid img-40" src="{{asset('assets/images/product/4.png')}}" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#" data-bs-original-title="" title="">Man shoes</a></div>
                              </td>
                              <td>$11</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group bootstrap-touchspin">
                                       <button class="btn btn-primary btn-square bootstrap-touchspin-down" type="button" data-bs-original-title="" title=""><i class="fa fa-minus"></i></button><span class="input-group-text bootstrap-touchspin-prefix" style="display: none;"></span><input class="touchspin text-center form-control" type="text" value="5" style="display: block;" data-bs-original-title="" title=""><span class="input-group-text bootstrap-touchspin-postfix" style="display: none;"></span><button class="btn btn-primary btn-square bootstrap-touchspin-up" type="button" data-bs-original-title="" title=""><i class="fa fa-plus"></i></button>
                                    </div>
                                 </fieldset>
                              </td>
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td colspan="4">
                                 <div class="input-group">
                                    <input class="form-control me-2" type="text" placeholder="Enter coupan code" data-bs-original-title="" title=""><a class="btn btn-primary" href="#" data-bs-original-title="" title="">Apply</a>
                                 </div>
                              </td>
                              <td class="total-amount">
                                 <h6 class="m-0 text-end"><span class="f-w-600">Total Price :</span></h6>
                              </td>
                              <td><span>$6935.00  </span></td>
                           </tr>
                           <tr>
                              <td class="text-end" colspan="5"><a class="btn btn-secondary cart-btn-transform" href="#" data-bs-original-title="" title="">continue shopping</a></td>
                              <td><a class="btn btn-success cart-btn-transform" href="" data-bs-original-title="" title="">check out</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
      </div>
   </div>
</div>


</div>
@endsection