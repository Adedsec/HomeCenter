<div class="card">
    <div class="card-header bg-dark text-light">
        @lang('strings.Order.Create.estate header')
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div>
                        <h4  class=" d-inline-block mb-4">{{ $estate->title }}</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.type')</div>
                                <div>{{ $estate->type == 'sell' ? 'فروش' : 'رهن و اجاره' }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.usage')</div>
                                <div>{{ $estate->usage }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.area')</div>
                                <div>{{ $estate->area }} متر</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.build_date')</div>
                                <div>{{ date('Y' , strtotime($estate->build_date)) }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between">
                                <div>@lang('strings.estate.create.room_count')</div>
                                <div>{{ $estate->room_count }}</div>
                            </div>
                        </li>
                        <hr>
                      </ul>

                      <p class="h6"> @lang('strings.estate.create.address') :  </p>
                      <p>{{ $estate->Address }}</p>

                </div>

            </div>
            <div class="col-md-6 mt-5">
                <h5 class=" mb-3">@lang('strings.estate.create.features')</h5>
                <ul class="list-group">
                    <li class="list-group-item {{ $estate->elevator ? 'active' : 'disabled' }} ">
                        @lang('strings.estate.create.elevator')
                      </li>
                      <li class="list-group-item {{ $estate->parking ? 'active' : 'disabled' }}">
                        @lang('strings.estate.create.parking')
                      </li>
                      <li class="list-group-item {{ $estate->anbari ? 'active' : 'disabled' }}">
                        @lang('strings.estate.create.anbari')
                      </li>
                </ul>
                <div class="row d-flex flex-column justify-content-center align-items-center mt-5 pr-3">
                    @if($estate->type == 'sell')
                    <p class="h4"> <strong class=" font-weight-bold">@lang('strings.price')</strong>   :   {{ number_format($estate->price) }} @lang('strings.toman')</p>
                    @else
                    <p class="h4"> <strong class=" font-weight-bold">@lang('strings.Rent')</strong>   :   {{ number_format($estate->price) }} @lang('strings.toman')</p>
                    <hr>
                    <p class="h4 ml-4"> <strong class=" font-weight-bold">@lang('strings.ejare')</strong>   :   {{ number_format($estate->rent_price) }} @lang('strings.toman')</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
