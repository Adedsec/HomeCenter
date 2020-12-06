@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form class="form mt-5" method="post" action={{route('Customer.store')}}>
                    @csrf
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" value="{{old('name')}}" class="form-control" id="name"
                               placeholder="Enter name Here" name="name">
                        @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="father-name">Father Name</label>
                        <input type="text" value="{{old('father-name')}}" class="form-control" id="father-name"
                               placeholder="Father Name" name="father-name">
                        @error('father-name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{old('email')}}" class="form-control" id="email"
                               placeholder="Email Here" name="email">
                        @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone</label>
                        <input type="number" value="{{old('phone_number')}}" class="form-control" id="phone_number"
                               placeholder="" name="phone_number">
                        @error('phone_number')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="national_code">National Code</label>
                        <input type="number" value="{{old('national_code')}}" class="form-control" id="national_code"
                               placeholder="National Code" name="national_code">
                        @error('national_code')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" class="form-control" value="{{old('birth_date')}}" id="birth_date"
                               name="birth_date"/>
                        @error('birth_date')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" value="{{old('address')}}" id="address" rows="3"
                                  name="address">{{old('address')}}</textarea>
                        @error('address')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="post_code">Post Code</label>
                        <input type="number" value="{{ old('post_code') }}" class="form-control" id="post_code"
                               name="post_code"/>
                        @error('post_code')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success" id="description">Create
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
