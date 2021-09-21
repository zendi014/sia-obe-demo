@extends('layouts.master')

@section('title') @lang('translation.Sparkline') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Charts @endslot
@slot('title') Sparkline @endslot
@endcomponent

<div class="row">
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Pie Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline1" data-colors='["#2ab57d", "#5156be", "#e9ecef"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Bar Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline2" data-colors='["#2ab57d"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Chart</h4>
            </div>
            <div class="card-body analytics-info">
                <div id="sparkline4" data-colors='["#5156be"]'></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Composite Bar Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline3" data-colors='["#5156be", "#2ab57d"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline5" data-colors='["#5156be", "rgba(81, 86, 190, 0.3)", "#2ab57d", "rgba(42, 181, 125, 0.3)"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card bg-primary">
            <div class="card-header bg-transparent">
                <h4 class="card-title text-white mb-0">Discrete Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline6" data-colors='["#fff"]' class="text-center"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Bullet Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline7" data-colors='["#5156be", "#fd625e"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Box Plot Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline8" data-colors='["#2ab57d"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Tristate Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline9" data-colors='["#5156be", "#2ab57d", "#f46a6a"]' class="text-center"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection

@section('script')
<!-- jquery-sparkline js -->
<script src="{{ URL::asset('/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- sparkline init -->
<script src="{{ URL::asset('/assets/js/pages/sparklines.init.js') }}"></script>

@endsection