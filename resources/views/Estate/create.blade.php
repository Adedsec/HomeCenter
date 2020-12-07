@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-light bg-dark">
                        @lang('strings.estate.create.cardHeader')
                    </div>
                    <div class="card-body p-4">
                        <form class="form" method="post" action={{route('Estate.store')}}>
                            @csrf
                            <div class="form-group">
                                <label for="title">@lang('strings.estate.create.title')</label>
                                <input type="text" value="{{old('Title')}}" class="form-control" id="title"
                                       placeholder="@lang('strings.estate.create.title placeholder')" name="title">
                                @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">@lang('strings.estate.create.price')</label>
                                <input type="number" value="{{old('price')}}" class="form-control" id="price"
                                       placeholder="@lang('strings.estate.create.price placeholder')" name="price">
                                @error('price')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rent_price">@lang('strings.estate.create.rentPrice')</label>
                                <input type="number" value="{{old('rent_price')}}" class="form-control" id="rent_price"
                                       placeholder="@lang('strings.estate.create.rentPrice placeholder')"
                                       name="rent_price">
                                @error('rent_price')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="usage">@lang('strings.estate.create.usage')</label>
                                <input type="text" value="{{old('usage')}}" class="form-control" id="usage"
                                       placeholder="@lang('strings.estate.create.usage placeholder')"
                                       name="usage">
                                @error('usage')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="area">@lang('strings.estate.create.area')</label>
                                <input type="number" value="{{old('area')}}" class="form-control" id="area"
                                       placeholder="@lang('strings.estate.create.area placeholder')" name="area">
                                @error('area')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">@lang('strings.estate.create.address')</label>
                                <textarea class="form-control"
                                          placeholder="@lang('strings.estate.create.address placeholder')"
                                          value="{{old('address')}}" id="address" rows="3"
                                          name="address"></textarea>
                                @error('address')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="picture">@lang('strings.estate.create.picture')</label>
                                <input type="file" class="form-control" id="picture" name="img_link"/>
                                @error('img_link')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="owner">@lang('strings.estate.create.owner')</label>
                                <select class="form-control" id="owner" name="owner_id">
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                                    @endforeach
                                </select>
                                @error('owner_id')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">@lang('strings.estate.create.categories')</label>
                                <select multiple class="form-control" id="category" name="category_id[]">
                                    @foreach($categories as $category)
                                        <option value={{$category->id}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id[]')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">@lang('strings.estate.create.description')</label>
                                <textarea class="form-control" value="{{old('description')}}" id="description" rows="3"
                                          placeholder="@lang('strings.estate.create.description placeholder')"
                                          name="description"></textarea>
                                @error('description')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success"
                                    id="description">@lang('strings.estate.create.addBtn')
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
