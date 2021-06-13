@section('chat-sec')

<div class="col-xl-4 xl-100 chat-sec box-col-6">
    <div class="card chat-default">
        <div class="card-header card-no-border">
            <div class="media media-dashboard">
                <div class="media-body">
                    <h5 class="mb-0">Live Chat</h5>
                </div>
                <div class="icon-box"><i class="fa fa-ellipsis-h"></i></div>
            </div>
        </div>
        <div class="card-body chat-box">
            <div class="chat">
                <div class="media left-side-chat">
                    <div class="media-body d-flex">
                        <div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
                        <div class="main-chat">
                            <div class="message-main"><span class="mb-0">Hi deo, Please send me link.</span></div>
                            <div class="sub-message message-main"><span class="mb-0">Right Now</span></div>
                        </div>
                    </div>
                    <p class="f-w-400">7:28 PM</p>
                </div>
                <div class="media right-side-chat">
                    <p class="f-w-400">7:28 PM</p>
                    <div class="media-body text-end">
                        <div class="message-main pull-right">
                            <span class="mb-0 text-start">How can do for you</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="media left-side-chat">
                    <div class="media-body d-flex">
                        <div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
                        <div class="main-chat">
                            <div class="sub-message message-main mt-0"><span>It's argenty</span></div>
                        </div>
                    </div>
                    <p class="f-w-400">7:28 PM</p>
                </div>
                <div class="media right-side-chat">
                    <div class="media-body text-end">
                        <div class="message-main pull-right"><span class="loader-span mb-0 text-start" id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></span></div>
                    </div>
                </div>
                <div class="input-group">
                    <input class="form-control" id="mail" type="text" placeholder="Type Your Message..." name="text">
                    <div class="send-msg"><i data-feather="send"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection