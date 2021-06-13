@section('appointment_box')

<div class="col-xl-4 xl-50 appointment box-col-6">
    <div class="card">
        <div class="card-header">
            <div class="header-top">
                <h5 class="m-0">Market Value</h5>
                <div class="card-header-right-icon">
                    <select class="button btn btn-primary">
                        <option>Year</option>
                        <option>Month</option>
                        <option>Day</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-Body">
            <div class="radar-chart">
                <div id="marketchart">       </div>
            </div>
        </div>
    </div>
</div>
@endsection