


@extends('layouts.master')

@section('breadcrumb-title')
<h3>Default</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Default</li>
@endsection


@section('contenthome')

      
        <div class="page-body">
            <div class="container-fluid">        
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    @yield('breadcrumb-title')
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                      @yield('breadcrumb-items')
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
         
  
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
            
            <!-- Container-fluid Ends-->
          </div>
          <!-- footer start-->
@endsection          