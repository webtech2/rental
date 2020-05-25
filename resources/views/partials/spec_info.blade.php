                <div class="card-body">
                <h5 class="card-text">{{ __('messages.vehicle_class') }}: {{ $spec->vehicleClass->name}}</h5>
                <h5 class="card-text">{{ __('messages.Year') }}: {{ $spec->year }}</h5>
                <h5 class="card-text">{{ __('messages.Transmission') }}: @if ($spec->automatic) {{ __('messages.automatic') }} @else {{ __('messages.manual') }} @endif</h5>
                </div>