@extends('layouts.app')

@section('content')

<div class="main text-right vh-75">
    <div class="container h-100">
        <div class="row justify-content-center">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <div class="row h-100">
            <div class="card w-100 h-100 ">
                <div class="card-header bg-dark text-light">
                    <h1>{{__("dashboard.Dashboard")}}</h1>
                </div>
                <div class="card-body h-100">
                    <div class="row h-100">
                        <div class="col-8">
                            <div class="card bg-secondary text-light profile-card ">
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
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header p-0" id="headingOne">
                                        <button class="btn btn-success w-100" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ __('strings.Cases') }}
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="{{route('Estate.index','all')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.CaseList")}}</a>
                                            <a href="{{route('Estate.create')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.AddCase")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0" id="headingTwo">
                                        <button class="btn btn-success w-100" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            {{ __('strings.Orders') }}
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="#"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.OrderList")}}</a>
                                            <a href="{{route('Estate.index','all')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.AddOrder")}}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header p-0" id="headingThree">
                                        <button class="btn btn-success w-100" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            {{ __('strings.Customers') }}
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="collapse " aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="#"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.CustomerList")}}</a>
                                            <a href="{{route('Estate.index','all')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.AddCustomer")}}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header p-0" id="headingFour">
                                        <button class="btn btn-success w-100" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            {{ __('strings.Owners') }}
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="collapse " aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="{{route('Owner.index')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.OwnerList")}}</a>
                                            <a href="{{route('Owner.create')}}"
                                                class="list-group-item list-group-item-action font-weight-bold">{{__("strings.AddOwner")}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0">
                                    <a href="{{ route('Category.index') }}"
                                        class="btn btn-danger w-100">{{ __('strings.CategoryManagement') }}</a>
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