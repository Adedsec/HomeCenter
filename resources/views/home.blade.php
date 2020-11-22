@extends('layouts.app')

@section('content')

    <div class="main text-right rtl">
        <div class="container">
            <div class="row justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="card w-100 h-100 ">
                    <div class="card-header bg-dark text-light">
                        <h1>{{__("dashboard.Dashboard")}}</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="card bg-secondary text-light h-100">
                                    <div class="card-header">
                                        <h3> {{__("dashboard.UserProfile")}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text rtl">{{\Illuminate\Support\Facades\Auth::user()->name}}
                                            <strong> : {{__("strings.Name")}}
                                            </strong></p>
                                        <p class="card-text">{{\Illuminate\Support\Facades\Auth::user()->email}}
                                            <strong> : {{__("strings.Email")}}
                                            </strong></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-danger">{{__("dashboard.EditProfile")}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="col mt-2">
                                    <div class="card bg-success text-light">
                                        <div class="card-body">
                                            <h4 class="card-title">{{__("strings.Orders")}}</h4>
                                            <p class="card-text font-weight-bold">مدیریت سفارشات</p>
                                            <a href="#" class="btn btn-danger">{{__("strings.Enter")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div class="card bg-warning">
                                        <div class="card-body">
                                            <h4 class="card-title rtl">{{__("strings.Cases")}}</h4>
                                            <p class="card-text font-weight-bold">مدیریت موردها</p>
                                            <a href="{{route('Estate.index','all')}}"
                                               class="btn btn-success">{{__("strings.Enter")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{__("strings.Customers")}}</h4>
                                            <p class="card-text font-weight-bold">مدیریت مشتریان</p>
                                            <a href="{{route('Customer.index','all')}}"
                                               class="btn btn-primary">{{__("strings.Enter")}}</a>
                                        </div>
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
