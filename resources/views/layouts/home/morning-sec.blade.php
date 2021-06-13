


@section('morning-sec')
    

	<div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
        <div class="card o-hidden profile-greeting">
            <div class="card-body">
                <div class="media">
                    <div class="badge-groups w-100">
                        <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                    </div>
                </div>
                <div class="greeting-user text-center">
                    <div class="profile-vector"><img class="img-fluid" src="{{asset('assets/images/dashboard/welcome.png')}}" alt=""></div>
                    <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                    <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span></p>
                    <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                    <div class="left-icon"><i class="fa fa-bell"> </i></div>
                </div>
            </div>
        </div>
    </div>

@endsection