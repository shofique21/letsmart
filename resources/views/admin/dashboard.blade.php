@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Amount | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Users | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Products | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-boxes"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">New Products | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mrb-30">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">New Products | <span>Today</span></h5>
                                    <div class="d-flex align-items-center pb-15">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary primary-bg-color">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Recent Sales product</div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection