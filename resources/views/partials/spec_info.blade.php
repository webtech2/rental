                <div class="card-body">
                <h5 class="card-text">Vehicle class: {{ $spec->vehicleClass->name}}</h5>
                <h5 class="card-text">Year: {{ $spec->year }}</h5>
                <h5 class="card-text">Transmission: @if ($spec->automatic) automatic @else manual @endif</h5>
                </div>