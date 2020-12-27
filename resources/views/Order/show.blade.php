@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">
            <form action="{{ route('Order.delete',$order->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mr-2 mb-3">@lang('strings.delete')</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
           @include('Order.components.estate')
        </div>
        <div class=" col-md-6 mb-5">
            @include('Order.components.owner')
        </div>
        <div class=" col-md-6 mb-5">
            @include('Order.components.customer')
        </div>
    </div>
</div>
@endsection
