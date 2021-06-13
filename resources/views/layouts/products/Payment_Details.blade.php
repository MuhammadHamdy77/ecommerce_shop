
@extends('layouts.master')




@section('content')
<div class="page-body">

        <div class="container-fluid">        
                    <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                        <h3>Payment Details</h3>
                        </div>
                        <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                            <li class="breadcrumb-item">Ecommerce</li>
                            <li class="breadcrumb-item active">Payment Details</li>
                        </ol>
                        </div>
                    </div>
                    </div>
        </div>
        <div class="container-fluid credit-card">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xl-8 box-col-12">
                <div class="card">
                    <div class="card-header py-4">
                    <h5>Credit card </h5>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form class="theme-form mega-form">
                                <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Card number" data-bs-original-title="" title="">
                                </div>
                                <div class="mb-3">
                                <input class="form-control" type="text" placeholder="First Name" data-bs-original-title="" title="">
                                </div>
                                <div class="mb-3">
                                <input class="form-control" type="date" data-bs-original-title="" title="">
                                </div>
                                <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Name on card" data-bs-original-title="" title="">
                                </div>
                                <div class="mb-3 mb-0">
                                <select class="form-select" size="1">
                                    <option>Select Type</option>
                                    <option>Master</option>
                                    <option>Visa</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 text-center"><img class="img-fluid" src="{{asset('assets/images/ecommerce/card.png')}}" alt=""></div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
            <!-- Debit Card Starts-->
            <div class="col-xl-4 col-lg-6 box-col-6 debit-card">
                <div class="card">
                    <div class="card-header py-4">
                    <h5>Debit card </h5>
                    </div>
                    <div class="card-body">
                    <form class="theme-form e-commerce-form row">
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="Full name here" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="Card number" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="CVV number" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="CVC" data-bs-original-title="" title="">
                        </div>
                        <div class="col-12">
                            <label class="col-form-label p-b-20">Expiration Date</label>
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <select class="form-select" size="1">
                                <option>Select Month</option>
                                <option>Jan</option>
                                <option>Fab</option>
                                <option>March</option>
                                <option>April</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <select class="form-select" size="1">
                                <option>Select Year</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="button" title="" data-bs-original-title="">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- Debit Card Ends-->
            <!-- COD Starts-->
            <div class="col-xl-4 col-lg-6 box-col-6">
                <div class="card">
                    <div class="card-header py-4">
                    <h5>COD</h5>
                    </div>
                    <div class="card-body">
                    <form class="theme-form row">
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="First Name" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="Last name" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="Pincode" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="number" placeholder="Enter mobile number" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="State" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="City" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-12">
                            <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="button" title="" data-bs-original-title="">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- COD Ends-->
            <!-- EMI Starts-->
            <div class="col-xl-4 col-lg-6 box-col-6">
                <div class="card">
                    <div class="card-header py-4">
                    <h5>EMI</h5>
                    </div>
                    <div class="card-body">
                    <form class="theme-form row">
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="First Name" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="Last name" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <input class="form-control" type="text" placeholder="Pincode" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6">
                            <select class="form-select" size="1">
                                <option>Bank Name</option>
                                <option>SBI</option>
                                <option>ICICI</option>
                                <option>KOTAK</option>
                                <option>BOB</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <select class="form-select" size="1">
                                <option>Select Card</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <select class="form-select" size="1">
                                <option>Select Duration</option>
                                <option>2015-2016</option>
                                <option>2016-2017</option>
                                <option>2017-2018</option>
                                <option>2018-2019</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <ul class="payment-opt">
                                <li><img src="{{asset('assets/images/ecommerce/mastercard.png')}}" alt=""></li>
                                <li><img src="{{asset('assets/images/ecommerce/visa.png')}}" alt=""></li>
                                <li><img src="{{asset('assets/images/ecommerce/paypal.png')}}" alt=""></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="button" title="" data-bs-original-title="">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- EMI Ends-->
            <!-- EMI Starts-->
            <div class="col-xl-4 col-lg-6 box-col-6">
                <div class="card">
                    <div class="card-header py-4">
                    <h5>Net Banking</h5>
                    </div>
                    <div class="card-body">
                    <form class="theme-form row">
                        <div class="mb-3 col-12">
                            <input class="form-control" type="text" placeholder="AC Holder name" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-12">
                            <input class="form-control" type="text" placeholder="Account number" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-6 p-r-0">
                            <select class="form-select" size="1">
                                <option>Select Bank</option>
                                <option>SBI</option>
                                <option>ICICI</option>
                                <option>KOTAK</option>
                                <option>BOB</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <input class="form-control" type="text" placeholder="ICFC code" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-12">
                            <input class="form-control" type="number" placeholder="Enter mobile number" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3 col-12">
                            <input class="form-control" type="text" placeholder="Other Details" data-bs-original-title="" title="">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="button" title="" data-bs-original-title="">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- EMI Ends-->
        </div>
        </div>

</div>
@endsection