@extends('layouts.master')
@section('content')
<div class="row">
	 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $tot_data }}<sup style="font-size: 20px"></sup></h3>

              <p>Total Data</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
</div>
@endsection
