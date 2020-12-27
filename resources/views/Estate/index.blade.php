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
                            <div class="card w-100 p-2">
                                <div class="card-body estate-index-card row d-flex">
                                    @forelse ($estates as $estate)
                                    <div class="col-md-4 p-3 ">
                                        <div class="card h-100 shadow-sm">

                                            <img src="{{ !is_null($estate->img_link) && File::exists(public_path('uploads'.'\\'.$estate->img_link)) ?  asset('uploads/'.$estate->img_link)  :  'https://via.placeholder.com/140x100?text=image' }}"
                                                alt="product-image" class="card-img-top">
                                            <div class="card-body d-flex flex-column justify-content-center">
                                                <a href="" class=" text-dark card-link">
                                                    <h4 class="card-title">{{ $estate->title }}</h4>
                                                    <p class="card-text">{{ $estate->description }}</p>
                                                </a>
                                                <div class="row m-1 mt-2 mb-0" id="tags">
                                                    <p class="h5">
                                                        <span class="badge font-weight-bold badge-success p-2">{{ $estate->type == 'sell' ? 'فروش' : 'رهن و اجاره' }}</span>
                                                    </p>
                                                </div>
                                                @if($estate->type=='sell')
                                                <div class="row m-1 mt-2">
                                                    <p class=" h5 font-weight-bold"> @lang('strings.price') {{ number_format($estate->price)  }} @lang('strings.toman') </p>
                                                </div>
                                                @else
                                                <div class="row m-1 mt-2">
                                                    <p class=" h5 font-weight-bold"> @lang('strings.Rent') : {{ number_format($estate->price)  }} @lang('strings.toman') </p>
                                                    @if(! is_null($estate->rent_price))
                                                    <p class=" h5 font-weight-bold"> @lang('strings.ejare') : {{  number_format($estate ->rent_price)  }}  @lang('strings.toman') </p>
                                                    @else
                                                    <p class=" h5 font-weight-bold"> @lang('strings.ejare') :  @lang('strings.free') </p>
                                                    @endif

                                                </div>
                                                @endif

                                            </div>
                                            <div class="card-footer  p-0">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="btn-group w-100 m-0">
                                                        <a href="{{ route('Estate.show' , $estate->id) }}"
                                                            class=" w-50 btn btn-outline-primary estate_index_btn_right">@lang('strings.estate.index.view')
                                                        </a>
                                                        <a href="#"
                                                            class=" w-50 btn btn-outline-success estate_index_btn_left">@lang('strings.estate.index.order')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>

                                    </div>
                                    @empty

                                    @endforelse

                                </div>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center align-items-center">
                                <div class="h4">
                                    {{ $estates->links() }}
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
