<div class="card h-100">
    <div class="card-header bg-dark text-light">
        @lang('strings.Order.Create.customer header')
    </div>
    <div class="card-body d-flex flex-column justify-content-center">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.name')</div>
                    <div>{{ $customer->name }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.fatherName')</div>
                    <div>{{ $customer['father-name'] }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.nationalCode')</div>
                    <div>{{ $customer->national_code }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.birthDate')</div>
                    <div>{{ $customer->birth_date }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.phone')</div>
                    <div>{{ $customer->phone_number }}</div>
                </div>
            </li>
            <hr>
          </ul>
    </div>
</div>
