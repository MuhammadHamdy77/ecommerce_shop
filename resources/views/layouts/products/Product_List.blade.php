@extends('layouts.master')



@section('content')
<div class="page-body">

<div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Product list</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Ecommerce</li>
                    <li class="breadcrumb-item active">Product list</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

<div class="container-fluid">
   <div class="row">
      <!-- Individual column searching (text inputs) Starts-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Individual column searching (text inputs) </h5>
               <span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span>
            </div>
            <div class="card-body">
               <div class="table-responsive product-table">
                  <div id="basic-1_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="basic-1_length"><label>Show <select name="basic-1_length" aria-controls="basic-1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="basic-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="basic-1" data-bs-original-title="" title=""></label></div><table class="display dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                     <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image: activate to sort column descending" style="width: 45.9801px;">Image</th><th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 227.486px;">Details</th><th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 55.8807px;">Amount</th><th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Stock: activate to sort column ascending" style="width: 48.4659px;">Stock</th><th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 61.6335px;">Start date</th><th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 120.014px;">Action</th></tr>
                     </thead>
                     <tbody>
                     <tr role="row" class="odd">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt=""></td>
                           <td>
                              <h6> Red Lipstick </h6>
                              <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                           </td>
                           <td>$10</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="even">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt=""></td>
                           <td>
                              <h6> Pink Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="odd">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt=""></td>
                           <td>
                              <h6> Gray Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="even">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt=""></td>
                           <td>
                              <h6> Green Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="odd">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt=""></td>
                           <td>
                              <h6> Black Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="even">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt=""></td>
                           <td>
                              <h6> White Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="odd">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt=""></td>
                           <td>
                              <h6> light Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="even">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt=""></td>
                           <td>
                              <h6> Gliter Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="odd">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt=""></td>
                           <td>
                              <h6> green Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr><tr role="row" class="even">
                           <td class="sorting_1"><img src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt=""></td>
                           <td>
                              <h6> Yellow Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Edit</button>
                           </td>
                        </tr></tbody>
                  </table><div class="dataTables_info" id="basic-1_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div><div class="dataTables_paginate paging_simple_numbers" id="basic-1_paginate"><a class="paginate_button previous disabled" aria-controls="basic-1" data-dt-idx="0" tabindex="0" id="basic-1_previous" data-bs-original-title="" title="">Previous</a><span><a class="paginate_button current" aria-controls="basic-1" data-dt-idx="1" tabindex="0" data-bs-original-title="" title="">1</a></span><a class="paginate_button next disabled" aria-controls="basic-1" data-dt-idx="2" tabindex="0" id="basic-1_next" data-bs-original-title="" title="">Next</a></div></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Individual column searching (text inputs) Ends-->
   </div>
</div>
</div>
@endsection