<div class="card h-100">
    <div class="card-header bg-dark text-light">
        @lang('strings.Order.Create.owner header')
    </div>
    <div class="card-body d-flex flex-column justify-content-center">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.name')</div>
                    <div>{{ $estate->owner->name }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.fatherName')</div>
                    <div>{{ $estate->owner['father-name'] }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.nationalCode')</div>
                    <div>{{ $estate->owner->national_code }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.birthDate')</div>
                    <div>{{ $estate->owner->birth_date }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class=" d-flex justify-content-between">
                    <div>@lang('strings.Owner.Create.phone')</div>
                    <div>{{ $estate->owner->phone_number }}</div>
                </div>
            </li>
            <hr>
          </ul>
    </div>
</div>
