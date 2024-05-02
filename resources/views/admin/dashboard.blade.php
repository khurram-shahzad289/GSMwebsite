@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1 text-center">Total User</span>
                    <h3 class="card-title mb-2 text-center">500</h3>

                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1 text-center">Today User</span>
                    <h3 class="card-title mb-2 text-center">20</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1 text-center">Total Downloads</span>
                    <h3 class="card-title mb-2 text-center">300</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3 text-center">Total Purchases</h5>
                        <h3 class="card-title mb-2 text-center">500</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3 text-center">Today Purchases</h5>
                        <h3 class="card-title mb-2 text-center">200</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1 text-center">Today Downloads</span>
                    <h3 class="card-title mb-2 text-center">500</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection