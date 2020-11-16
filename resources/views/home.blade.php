@extends('layouts.app')

@section('content')

    <div class="main">
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
                        <h1>Dashboard</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="card bg-success text-light h-100">
                                    <div class="card-header">
                                        <h3> {{__("Profile")}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><strong>Name
                                                : </strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                                        <p class="card-text"><strong>Email-Address
                                                : </strong>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-danger">{{__("Edit Profile")}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="col mt-2">
                                    <div class="card bg-primary text-light">
                                        <div class="card-body">
                                            <h5 class="card-title">{{__("Orders")}}</h5>
                                            <p class="card-text">{{__("List of Orders and Management of Orders")}}</p>
                                            <a href="#" class="btn btn-success">{{__("Enter")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div class="card bg-warning">
                                        <div class="card-body">
                                            <h5 class="card-title">{{__("Cases")}}</h5>
                                            <p class="card-text">{{__("List of all Cases and Management of Cases")}}</p>
                                            <a href="{{route('Estate.index','all')}}"
                                               class="btn btn-danger">{{__("Enter")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{__("Customers")}}</h5>
                                            <p class="card-text">{{__("List of Customers and Management")}}</p>
                                            <a href="{{route('Customer.index','all')}}"
                                               class="btn btn-primary">{{__("Enter")}}</a>
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
