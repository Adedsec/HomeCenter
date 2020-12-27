@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
               @include('Order.components.estate')
            </div>
            <div class=" col-md-4">
                @include('Order.components.owner')
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        @lang('strings.Order.Create.customer select and add')
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="checkbox" id="agree" onclick="toggleit()">
                            <label for="agree">@lang('strings.Order.Create.agree')</label>
                        </div>

                        <form class="form" action="{{ route('Order.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $estate->id }} " name="estate">
                            <div class="form-group">
                                <label  for="customer">@lang('strings.Order.Create.customers select')</label>
                                <select class=" form-control" name="customer" id="customer">
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }} / {{ $customer ->national_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </select>
                            <input class="btn btn-success" disabled id="submit" type="submit" value="@lang('strings.AddOrder')">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
    var check = document.getElementById('agree');

    var submit = document.getElementById('submit');
    function toggleit()
    {
        if(check.checked)
        {
            submit.disabled=false;
        }else{
            submit.disabled=true;

        }
    }

    </script>
@endsection

@section('javascript')


@endsection
