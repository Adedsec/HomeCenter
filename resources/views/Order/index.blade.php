
@extends('layouts.app')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center mt-5 ">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        @lang('strings.Order.index.cardHeader')
                    </div>
                    <div class="card-body p-5">

                        <table class="table table-dark table-striped text-center  ">
                            <thead>
                            <tr>
                                <th>@lang('strings.Order.index.code')</th>
                                <th>@lang('strings.Order.index.estate')</th>
                                <th>@lang('strings.Order.index.owner')</th>
                                <th>@lang('strings.Order.index.customer')</th>
                                @auth
                                    <th>@lang('strings.Customer.index.action')</th>
                                @endauth

                            </tr>
                            </thead>
                            <tbody>

                            @forelse ($orders as $order)
                                <tr>
                                    <td class="align-middle">{{ $order->id }}</td>
                                    <td class="align-middle">{{ App\Estate::find($order->estate_id)->title }}</td>
                                    <td class="align-middle">{{ App\Owner::find($order->owner_id)->name }}</td>
                                    <td class="align-middle">{{ App\Customer::find($order->customer_id)->name }}</td>
                                    @auth
                                        <td class="align-middle">
                                            <a href="{{ route('Order.show' , $order->id) }}" class="btn btn-primary">@lang('strings.Order.index.view')</a>
                                            <form class=" d-inline-block" method="POST"
                                                  action={{ route('Order.delete', ['order' => $order->id]) }}>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                        href="">@lang('strings.Customer.index.delete')</button>
                                            </form>
                                        </td>
                                    @endauth
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <p>@lang('strings.Order.index.notfound')</p>
                                    </td>

                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
