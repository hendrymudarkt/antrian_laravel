@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
{{-- vendor css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
{{-- Page css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
    <div class="row match-height">
        <!-- Card -->
        {{-- @foreach ($poli as $p)
            <h1>{{ $p->nama }}</h1> --}}
            @foreach ($loket as $l)
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="card-header">{{ $l->nama }} ({{ $l->poliklinik }})</div>
                    <div class="card-body">
                        <h4 class="card-title">Nomor Antrian</h4>
                        <p class="card-text">{{ $l->nomor }}</p>
                        @if (Auth::user()->level == "admin")
                        <a href="{{ url('dashboard/PanggilAntrian/'. $l->id.'/'. $l->id_poli) }}" class="btn btn-outline-primary">Panggil</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        {{-- @endforeach --}}
        <!--/ Card -->
    </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
{{-- vendor files --}}
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
@endsection
