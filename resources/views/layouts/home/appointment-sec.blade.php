@section('appointment-sec')
    
<div class="col-xl-4 xl-50 appointment-sec box-col-6">
    <div class="row">
        <div class="col-xl-12 appointment">
            <div class="card">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h5 class="m-0">appointment</h5>
                        <div class="card-header-right-icon">
                            <select class="button btn btn-primary">
                                <option>Today</option>
                                <option>Tomorrow</option>
                                <option>Yesterday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="appointment-table table-responsive">
                        <table class="table table-bordernone">
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
                                        <div class="status-circle bg-primary"></div>
                                    </td>
                                    <td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
                                    <td>
                                        <p class="m-0 font-primary">28 Sept</p>
                                    </td>
                                    <td class="text-end">
                                        <div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
                                        <div class="status-circle bg-primary"></div>
                                    </td>
                                    <td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
                                    <td>
                                        <p class="m-0 font-primary">22 Sept</p>
                                    </td>
                                    <td class="text-end">
                                        <div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 alert-sec">
            <div class="card bg-img">
                <div class="card-header">
                    <div class="header-top">
                        <h5 class="m-0">Alert  </h5>
                        <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="body-bottom">
                        <h6>  10% off For drama lights Couslations...</h6>
                        <span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection