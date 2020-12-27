@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-8">
                <div class="card mt-5 mb-5">
                    <div class="card-header bg-dark text-light">
                        @lang('strings.Owner.edit.cardTitle')
                    </div>
                    <div class="card-body p-4">
                        <form class="form" method="post" action={{route('Owner.update' , $owner)}}>
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">@lang('strings.Owner.Create.name')</label>
                                <input type="text" value="{{$owner->name}}" class="form-control" id="name"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.name')" name="name">
                                @error('name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="father-name">@lang('strings.Owner.Create.fatherName')</label>
                                <input type="text" value="{{$owner['father-name']}}" class="form-control" id="father-name"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.fatherName')"
                                       name="father-name">
                                @error('father-name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('strings.Owner.Create.email')</label>
                                <input type="email" value="{{$owner->email}}" class="form-control" id="email"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.email')" name="email">
                                @error('email')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">@lang('strings.Owner.Create.phone')</label>
                                <input type="text" value="{{$owner->phone_number}}" class="form-control"
                                       id="phone_number"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.phone')"
                                       name="phone_number">
                                @error('phone_number')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="national_code">@lang('strings.Owner.Create.nationalCode')</label>
                                <input type="number" value="{{$owner->national_code}}" class="form-control"
                                       id="national_code"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.nationalCode')"
                                       name="national_code">
                                @error('national_code')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="birth_date">@lang('strings.Owner.Create.birthDate')</label>
                                <input type="date" class="form-control" value="{{$owner->birth_date}}" id="birth_date"
                                       name="birth_date"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.birthDate')"/>
                                @error('birth_date')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">@lang('strings.Owner.Create.address')</label>
                                <textarea class="form-control"
                                          placeholder="@lang('strings.Owner.Create.placeHolder.address')"
                                          value="{{old('address')}}" id="address" rows="3"
                                          name="address">{{$owner->address}}</textarea>
                                @error('address')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="post_code">@lang('strings.Owner.Create.postCode')</label>
                                <input type="number" value="{{ $owner->post_code }}" class="form-control" id="post_code"
                                       name="post_code"
                                       placeholder="@lang('strings.Owner.Create.placeHolder.postCode')"/>
                                @error('post_code')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success" id="description">
                                @lang('strings.save')
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
