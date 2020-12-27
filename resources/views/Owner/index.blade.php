@extends('layouts.app')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center mt-5 ">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        @lang('strings.Owner.index.cardHeader')
                    </div>
                    <div class="card-body p-5">
                        <div class="row justify-content-center mb-5">
                            <div class="col-7">
                                <form class="w-100" action="">
                                    <div class="form-row w-100">
                                        <input class=" col-9 form-control" type="text" name="search" id="search"
                                               placeholder="@lang('strings.Owner.index.searchPlaceHolder')">
                                        <input class="btn btn-success col-2 ml-1" type="submit"
                                               value="@lang('strings.Owner.index.searchBtn')">
                                    </div>
                                </form>
                            </div>
                        </div>
                        @auth()
                        <div class="row">
                            <div class="col-md-2">
                                <a href="{{route('Owner.create')}}"
                                   class="m-2 btn btn-primary">@lang('strings.Owner.Create.createBtn')</a>
                            </div>
                        </div>
                        @endauth
                        @guest
                        <div class="row">
                            <div class="col-md-2">
                                <a  href="{{route('Owner.create')}}"
                                   class="m-2 btn btn-primary disabled">@lang('strings.Owner.Create.createBtn')</a>
                            </div>
                            <div class="col-md-8">
                                <div class="alert alert-danger">@lang('strings.please login')</div>
                            </div>
                        </div>
                        @endguest
                        <table class="table table-dark table-striped text-center">
                            <thead>
                            <tr>
                                <th>@lang('strings.Owner.index.name')</th>
                                <th>@lang('strings.Owner.index.national code')</th>
                                <th>@lang('strings.Owner.index.email')</th>
                                <th>@lang('strings.Owner.index.phone number')</th>
                                @auth
                                    <th>@lang('strings.Owner.index.action')</th>
                                @endauth

                            </tr>
                            </thead>
                            <tbody>

                            @forelse ($owners as $owner)
                                <tr>
                                    <td class="align-middle">{{ $owner->name }}</td>
                                    <td class="align-middle">{{ $owner->national_code }}</td>
                                    <td class="align-middle">{{ $owner->email }}</td>
                                    <td class="align-middle">{{ $owner->phone_number }}</td>
                                    @auth
                                        <td class="align-middle">
                                            <a href="{{ route('Owner.edit' , $owner->id) }}" class="btn btn-primary">@lang('strings.Owner.index.edit')</a>
                                            <form class=" d-inline-block" method="POST"
                                                  action={{ route('Owner.delete', ['id' => $owner->id]) }}>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                        href="">@lang('strings.Owner.index.delete')</button>
                                            </form>
                                        </td>
                                    @endauth
                                </tr>
                            @empty

                                <tr>
                                    <td colspan="5">
                                        <p>@lang('strings.Owner.index.not found')</p>
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
