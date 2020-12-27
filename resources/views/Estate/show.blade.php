@extends('layouts.app')

@section('content')


<div class="container bg-light mt-5">
    <div class=" card p-2">
        <div class="row">
            <div class=" col-md-5 offset-1 mt-5 d-flex flex-column justify-content-between">
                <div>
                    <div>
                        <h4  class=" d-inline-block mb-4">{{ $estate->title }}</h4>
                        <a class=" m-2 d-inline-block btn btn-primary" href="{{ route('Estate.edit' , $estate->id ) }}">@lang('strings.Edit')</a>
                        <a class=" m-2 d-inline-block btn btn-danger" href="{{ route('Estate.delete' , $estate->id ) }}">@lang('strings.delete')</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.type')</div>
                                <div>{{ $estate->type == 'sell' ? 'فروش' : 'رهن و اجاره' }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.usage')</div>
                                <div>{{ $estate->usage }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.area')</div>
                                <div>{{ $estate->area }} متر</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.build_date')</div>
                                <div>{{ date('Y' , strtotime($estate->build_date)) }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.room_count')</div>
                                <div>{{ $estate->room_count }}</div>
                            </div>
                        </li>
                        <hr>
                      </ul>

                      <p class="h6"> @lang('strings.estate.create.address') :  </p>
                      <p>{{ $estate->Address }}</p>

                </div>

            </div>
            <div class=" p-0 col-md-6 d-flex align-items-center justify-content-center mt-5">

                <img src="{{ !is_null($estate->img_link) && File::exists(public_path('uploads'.'\\'.$estate->img_link)) ?  asset('uploads/'.$estate->img_link)  :  'https://via.placeholder.com/400x400?text=image' }}" width="450" height="400" alt="estate picture">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 offset-1">
                <div class="row d-flex flex-row mt-3">
                    @if($estate->type == 'sell')
                    <p class="h4"> <strong class=" font-weight-bold">@lang('strings.price')</strong>   :   {{ number_format($estate->price) }}</p>
                    @else
                    <p class="h4"> <strong class=" font-weight-bold">@lang('strings.Rent')</strong>   :   {{ number_format($estate->price) }}</p>
                    <p class="h4 ml-4"> <strong class=" font-weight-bold">@lang('strings.ejare')</strong>   :   {{ number_format($estate->rent_price) }}</p>
                    @endif

                </div>
                <div class="row mt-4">
                    <div class=" col-md-3 offset-2">
                        <a class=" btn btn-outline-success" href="#"> ثبت سفارش  </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <li class="list-group-item {{ $estate->elevator ? 'active' : 'disabled' }} ">
                        @lang('strings.estate.create.elevator')
                      </li>
                      <li class="list-group-item {{ $estate->parking ? 'active' : 'disabled' }}">
                        @lang('strings.estate.create.parking')
                      </li>
                      <li class="list-group-item {{ $estate->anbari ? 'active' : 'disabled' }}">
                        @lang('strings.estate.create.anbari')
                      </li>
                </div>
            </div>
        </div>
        <div class="row p-5 d-flex flex-column">
            <h5 class=" mb-4">توضیحات</h5>
            <p>{{ $estate->description }}</p>
        </div>
    </div>

</div>


@endsection
