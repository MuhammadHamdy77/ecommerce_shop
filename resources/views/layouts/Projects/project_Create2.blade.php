
@extends('layouts.master')





@section('content')
    



<div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Project Create</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" data-bs-original-title="" title=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Project Create</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="form theme-form">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Project Title</label>
                  <input class="form-control" type="text" placeholder="Project name *" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Client name</label>
                  <input class="form-control" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Project Rate</label>
                  <input class="form-control" type="text" placeholder="Enter project Rate" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Project Type</label>
                  <select class="form-select">
                    <option>Hourly</option>
                    <option>Fix price</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Priority</label>
                  <select class="form-select">
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                    <option>Urgent</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Project Size</label>
                  <select class="form-select">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Big</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Starting date</label>
                  <input class="datepicker-here form-control" type="text" data-language="en" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Ending date</label>
                  <input class="datepicker-here form-control" type="text" data-language="en" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Enter some Details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Upload project file</label>
                  <form class="dropzone dz-clickable" id="singleFileUpload" action="/upload.php">
                    <div class="dz-message needsclick">
                      <i class="icon-cloud-up"></i>
                      <h6>Drop files here or click to upload.</h6>
                      <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div><a class="btn btn-success me-3" href="#" data-bs-original-title="" title="">Add</a><a class="btn btn-danger" href="#" data-bs-original-title="" title="">Cancel</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
          <!-- Container-fluid Ends-->
        </div>

@endsection