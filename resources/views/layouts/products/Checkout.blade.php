@extends('layouts.master')




@section('content')
<div class="page-body">


<div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Checkout</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Ecommerce</li>
                    <li class="breadcrumb-item active">Checkout</li>
                  </ol>
                </div>
              </div>
            </div>
</div>


<div class="container-fluid checkout">
   <div class="card">
      <div class="card-header">
         <h5>Billing Details</h5>
      </div>
      <div class="card-body">
         <div class="row">
            <div class="col-xl-6 col-sm-12">
               <form>
                  <div class="row">
                     <div class="mb-3 col-sm-6">
                        <label for="inputEmail4">First Name</label>
                        <input class="form-control" id="inputEmail4" type="email" data-bs-original-title="" title="">
                     </div>
                     <div class="mb-3 col-sm-6">
                        <label for="inputPassword4">Last Name</label>
                        <input class="form-control" id="inputPassword4" type="password" data-bs-original-title="" title="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="mb-3 col-sm-6">
                        <label for="inputEmail5">Phone</label>
                        <input class="form-control" id="inputEmail5" type="email" data-bs-original-title="" title="">
                     </div>
                     <div class="mb-3 col-sm-6">
                        <label for="inputPassword7">Email Address</label>
                        <input class="form-control" id="inputPassword7" type="password" data-bs-original-title="" title="">
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="inputState">Country</label>
                     <select class="form-control" id="inputState">
                        <option selected="">Choose...</option>
                        <option>...</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="inputAddress5">Address</label>
                     <input class="form-control" id="inputAddress5" type="text" data-bs-original-title="" title="">
                  </div>
                  <div class="mb-3">
                     <label for="inputCity">Town/City</label>
                     <input class="form-control" id="inputCity" type="text" data-bs-original-title="" title="">
                  </div>
                  <div class="mb-3">
                     <label for="inputAddress2">State/Country</label>
                     <input class="form-control" id="inputAddress2" type="text" data-bs-original-title="" title="">
                  </div>
                  <div class="mb-3">
                     <label for="inputAddress6">Postal Code</label>
                     <input class="form-control" id="inputAddress6" type="text" data-bs-original-title="" title="">
                  </div>
                  <div class="mb-3">
                     <div class="form-check">
                        <input class="form-check-input" id="gridCheck" type="checkbox" data-bs-original-title="" title="">
                        <label class="form-check-label" for="gridCheck">Check me out</label>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-xl-6 col-sm-12">
               <div class="checkout-details">
                  <div class="order-box">
                     <div class="title-box">
                        <div class="checkbox-title">
                           <h4>Product </h4>
                           <span>Total</span>
                        </div>
                     </div>
                     <ul class="qty">
                        <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                        <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                     </ul>
                     <ul class="sub-total">
                        <li>Subtotal <span class="count">$380.10</span></li>
                        <li class="shipping-class">
                           Shipping
                           <div class="shopping-checkout-option">
                              <label class="d-block" for="chk-ani">
                              <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" data-bs-original-title="" title="">Option 1
                              </label>
                              <label class="d-block" for="chk-ani1">
                              <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-bs-original-title="" title="">Option 2
                              </label>
                           </div>
                        </li>
                     </ul>
                     <ul class="sub-total total">
                        <li>Total <span class="count">$620.00</span></li>
                     </ul>
                     <div class="animate-chk">
                        <div class="row">
                           <div class="col">
                              <label class="d-block" for="edo-ani">
                              <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" data-original-title="" title="" data-bs-original-title="">Check Payments
                              </label>
                              <label class="d-block" for="edo-ani1">
                              <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" data-original-title="" title="" data-bs-original-title="">Cash On Delivery
                              </label>
                              <label class="d-block" for="edo-ani2">
                              <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" data-original-title="" title="" data-bs-original-title="">PayPal<img class="img-paypal" src="{{asset('assets/images/checkout/paypal.png')}}" alt="">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="order-place"><a class="btn btn-primary" href="#" data-bs-original-title="" title="">Place Order  </a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




</div>
@endsection