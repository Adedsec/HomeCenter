@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row w-100">
            <div class="card w-100 m-5">

                <div class="card-header bg-dark text-light">
                    @lang('strings.Category management.title')
                </div>
                <div class="card-body p-5">
                    {{-- add category form --}}
                    <div class="row d-flex align-items-center justify-content-center">
                        <form class=" form col-12" method="POST" action={{ route('Category.store') }}>
                            @csrf
                            <div class="row mb-5">
                                <div class="col-6 active-cyan-4">
                                    <input class="form-control active-cyan-4" type="text"
                                           placeholder="@lang('strings.Category management.addPlaceHolder')"
                                           aria-label="name" name="name">
                                </div>
                                <div class="col-2">
                                    <input type="submit" class="form-control btn btn-success"
                                           value="@lang('strings.Category management.addBtn')">
                                </div>

                            </div>
                        </form>
                    </div>
                    {{-- category list  --}}
                    <div class="row mt-3 d-flex justify-content-center align-items-center">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('strings.Category management.name')</th>
                                <th scope="col">@lang('strings.Category management.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a type="button" class="btn btn-primary"
                                           href="">@lang('strings.Category management.edit')</a>
                                        <form class=" d-inline-block" method="POST"
                                              action={{ route('Category.delete', ['id' => $category->id]) }}>
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                    href="">@lang('strings.Category management.delete')</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
