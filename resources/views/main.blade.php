@extends('layouts.app')

@section('content')
    <div class="container-fluid mh-100 ">
        <div class="row pt-0 h-75 mb-0 ">
            <div class="col-12 m-0 p-0 h-100 pb-2">
                <section class="jumbotron text-center h-100 bg-overlay pb-5">
                    <div class="container-fluid h-100 mt-5 ">
                        <h1>@lang('main.heading_title')</h1>
                        <p class="lead text-muted">
                            @lang('main.heading_text')
                        </p>
                        <p>
                            @auth()
                                <a href="{{route('home')}}" class="btn btn-success my-2">
                                    @lang('main.dashboard')
                                </a>
                                <a class="btn btn-outline-primary my-2"
                                   href="{{route('Estate.create')}}">@lang('strings.AddCase')</a>
                            @else
                                <a href="{{route('login')}}" class="btn btn-danger my-2">
                                    @lang('main.login')
                                </a>
                            @endauth
                        </p>


                        <!-- search bar -->
                        <div class="card w-75 m-auto bg-transparent ">
                            <form class="d-flex justify-content-center align-items-center mt-5 mb-5">
                                <div class="form-row align-items-around w-75">
                                    <div class="col-6 my-1">
                                        <input class="form-control" type="text"
                                               placeholder="@lang('strings.Search.PlaceHolder')" aria-label="Search">
                                    </div>
                                    <div class="col-4 my-1">
                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Category</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="0" selected>@lang('strings.Category.All')</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2 my-1">
                                        <button type="submit"
                                                class="btn btn-outline-success">@lang('strings.Search')</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </section>
            </div>

        </div>


        {{--        Cards--}}
        <div class="row mb-5">
            <div class="col-3">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        @lang('strings.Cases')
                    </div>
                    <ul class="list-group list-group-flush bg-primary">
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Estate.index','sell')}}">@lang('strings.Sell')
                        </a>
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Estate.index','rent')}}">@lang('strings.Rent')
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        @lang('strings.Customers')
                    </div>
                    <ul class="list-group list-group-flush bg-primary">
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Customer.index')}}">@lang('strings.CustomerList')
                        </a>
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Customer.create')}}">@lang('strings.AddCustomer')
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        @lang('strings.Owners')
                    </div>
                    <ul class="list-group list-group-flush bg-primary">
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Owner.index')}}">@lang('strings.OwnerList')
                        </a>
                        <a class="list-group-item bg-success text-light"
                           href="{{route('Owner.create')}}">@lang('strings.AddOwner')
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        @lang('strings.Orders')
                    </div>
                    <ul class="list-group list-group-flush bg-primary">
                        <a class="list-group-item bg-success text-light"
                           href="#">@lang('strings.OrderList')
                        </a>
                        <a class="list-group-item bg-success text-light"
                           href="#">@lang('strings.AddOrder')
                        </a>
                    </ul>
                </div>
            </div>

        </div>


        @endsection


        @section('javascript')
            navbar = document.querySelector('#navbar')
            navbar.classList.add("sticky-top");
@endsection
