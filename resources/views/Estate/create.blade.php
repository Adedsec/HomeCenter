@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form class="form mt-5" method="post" action={{route('Estate.store')}}>
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{old('title')}}" class="form-control" id="title"
                               placeholder="Enter Title Here" name="title">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" value="{{old('price')}}" class="form-control" id="price"
                               placeholder="Price Here" name="price">
                    </div>
                    <div class="form-group">
                        <label for="rent_price">Rent Price</label>
                        <input type="number" value="{{old('rent_price')}}" class="form-control" id="rent_price"
                               placeholder="Price Here" name="rent_price">
                    </div>
                    <div class="form-group">
                        <label for="usage">Usage</label>
                        <input type="text" value="{{old('usage')}}" class="form-control" id="usage" placeholder=""
                               name="usage">
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="number" value="{{old('area')}}" class="form-control" id="area"
                               placeholder="area(meter)" name="area">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" value="{{old('address')}}" id="address" rows="3"
                                  name="address"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" class="form-control" id="picture" name="img_link"/>
                    </div>

                    <div class="form-group">
                        <label for="owner">Owner</label>
                        <select class="form-control" id="owner" name="owner_id">
                            @foreach($owners as $owner)
                                <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select multiple class="form-control" id="category" name="category_id[]">
                            @foreach($categories as $category)
                                <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" value="{{old('description')}}" id="description" rows="3"
                                  name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" id="description">Create
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
