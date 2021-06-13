
@section('breadcrumb-title')
<h3>Default</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Default</li>
@endsection


@section('content')

<div class="container-fluid">
	<div class="row second-chart-list third-news-update">

        @include('layouts/home.morning-sec')
        @yield('morning-sec')

        @include('layouts/home.calendar-sec')
        @yield('calendar-sec')

        @include('layouts/home.dashboard-sec')
        @yield('dashboard-sec')

        @include('layouts/home.chart_data_left')
        @yield('chart_data_left')

        @include('layouts/home.chart_data_right')
        @yield('chart_data_right')

        @include('layouts/home.chart_data_right-second')
        @yield('chart_data_right_second')

        @include('layouts/home.news_box')
        @yield('news_box')

        @include('layouts/home.appointment-sec')
        @yield('appointment-sec')


        @include('layouts/home.notification_box')
        @yield('notification_box')

        @include('layouts/home.appointment_box')
        @yield('appointment_box')

        @include('layouts/home.chat-sec')
        @yield(' chat-sec')

        @include('layouts/home.calendar-sec_box')
        @yield('calendar-sec_box')



	




        
	</div>
</div>
<script type="text/javascript">
	var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection