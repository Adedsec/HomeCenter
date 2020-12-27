@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-8">
            <div class="card">
                <div class="card-header text-light bg-dark">
                    @lang('strings.estate.edit.cardHeader')
                </div>
                <div class="card-body p-4">
                    <form class="form" method="post" action={{route('Estate.update',$estate->id)}}>
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">@lang('strings.estate.create.title')</label>
                                <input type="text" value="{{$estate->title}}" class="form-control" id="title"
                                    placeholder="@lang('strings.estate.create.title placeholder')" name="title" >
                                @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type">@lang('strings.estate.create.type')</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="sell">فروش</option>
                                    <option value="rent" {{ $estate->type == 'rent' ? 'selected' : '' }} >رهن و اجاره</option>
                                </select>
                                @error('type')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="price">@lang('strings.estate.create.price')</label>
                                <input type="number" value="{{$estate->price}}" class="form-control" id="price"
                                    placeholder="@lang('strings.estate.create.price placeholder')" name="price">
                                @error('price')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rent_price">@lang('strings.estate.create.rentPrice')</label>
                                <input type="number" value="{{$estate->rent_price}}" class="form-control" id="rent_price"
                                    placeholder="@lang('strings.estate.create.rentPrice placeholder')"
                                    name="rent_price">
                                @error('rent_price')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="usage">@lang('strings.estate.create.usage')</label>
                                <input type="text" value="{{$estate->usage}}" class="form-control" id="usage"
                                    placeholder="@lang('strings.estate.create.usage placeholder')" name="usage">
                                @error('usage')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="area">@lang('strings.estate.create.area')</label>
                                <input type="number" value="{{$estate->area}}" class="form-control" id="area"
                                    placeholder="@lang('strings.estate.create.area placeholder')" name="area">
                                @error('area')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="build_date">@lang('strings.estate.create.build_date')</label>
                                <input type="date" value="{{$estate->build_date}}" class="form-control" id="build_date"
                                    name="build_date">
                                @error('build_date')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-4">
                                <label for="picture">@lang('strings.estate.create.picture')</label>
                                <input disabled type="file" class="form-control" id="picture" name="img_link" />
                                @error('img_link')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="owner">@lang('strings.estate.create.owner')</label>
                                <select class="form-control" id="owner" name="owner_id">
                                    @foreach($owners as $owner)
                                    <option {{ $estate->owner == $owner  ? 'selected' : '' }} value="{{$owner->id}}">{{$owner->name}}</option>
                                    @endforeach
                                </select>
                                @error('owner_id')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="room">@lang('strings.estate.create.room_count')</label>
                                <input type="number" value="{{$estate->room_count}}" class="form-control" id="room"
                                    placeholder="@lang('strings.estate.create.room_count placeholder')"
                                    name="room_count">
                                @error('room_count')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">@lang('strings.estate.create.address')</label>
                            <textarea class="form-control"
                                placeholder="@lang('strings.estate.create.address placeholder')" id="address" rows="3"
                                name="Address">{{$estate->Address}}</textarea>
                            @error('Address')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="category">@lang('strings.estate.create.categories')</label>
                                <select multiple class="form-control" id="category" name="category_id[]">
                                    @foreach($categories as $category)
                                    <option {{ $estate->categories->contains('id' ,$category->id) ? 'selected' : '' }} value={{$category->id}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id[]')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 ml-2 mt-2">

                                <div class="">
                                    <div class="card">
                                        <div class="card-body ">
                                            <label class="card-title"
                                                for="">@lang('strings.estate.create.features')</label>
                                            <div class="row">
                                                <div class="form-group offset-2 ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value={{ true }} name="elevator"
                                                            {{ $estate->elevator ? 'checked' : '' }}
                                                            type="checkbox" id="elevator">
                                                        <label class="form-check-label"
                                                            for="elevator">@lang('strings.estate.create.elevator')</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value={{ true }} name="anbari"
                                                        {{ $estate->anbari ? 'checked' : '' }}
                                                            type="checkbox" id="anbari">
                                                        <label class="form-check-label"
                                                            for="anbari">@lang('strings.estate.create.anbari')</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value={{ true }} name="parking"
                                                        {{ $estate->parking ? 'checked' : '' }}
                                                            type="checkbox" id="parking">
                                                        <label class="form-check-label"
                                                            for="parking">@lang('strings.estate.create.parking')</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">@lang('strings.estate.create.description')</label>
                            <textarea class="form-control" id="description" rows="3"
                                placeholder="@lang('strings.estate.create.description placeholder')"
                                name="description">{{$estate->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success" id="btn">@lang('strings.save')
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
