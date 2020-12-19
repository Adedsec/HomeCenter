@extends('layouts.app')

@section('content')

<div class="main">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="bg-light w-100 m-5">
                <div class=" container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class=" form col-9 ">
                            <div class="row mb-5">
                                <div class="col-6 active-cyan-4">
                                    <input class="form-control active-cyan-4" type="text"
                                        placeholder="@lang('strings.estate.index.search')" aria-label="Search">
                                </div>
                                <div class="col-3 ">
                                    <select class="form-control">
                                        <option value="0">@lang('strings.estate.index.category')</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="form-control btn btn-success"
                                        value="@lang('strings.estate.index.search')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0">
                        <div class="container-fluid">
                            <div class="card w-100">
                                <div class="card-body estate-index-card row d-flex">
                                    @forelse ($estates as $estate)
                                    <div class="col-md-4 p-4 ">
                                        <div class="card h-100 shadow-sm">

                                            <img src="https://via.placeholder.com/200x150?text=image"
                                                alt="product-image" class="card-img-top">
                                            <div class="card-body">
                                                <a href="" class=" text-dark card-link">
                                                    <h4 class="card-title">{{ $estate->title }}</h4>
                                                    <p class="card-text">{{ $estate->description }}</p>
                                                </a>

                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="btn-group">
                                                        <a href="#"
                                                            class=" btn btn-sm btn-outline-primary estate_index_btn_right">@lang('strings.estate.index.view')
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-success estate_index_btn_left">@lang('strings.estate.index.order')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty

                                    @endforelse

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