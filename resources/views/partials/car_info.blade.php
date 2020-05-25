                <div class="list-group-item">
                    <h5 class="card-title">
                        <a href="{{ url('car', $car->id) }}">{{ $car->specification->make }} {{ $car->specification->model }}, {{ $car->color }}, {{ $car->price }} {{ __('messages.EUR_per_day') }}</a>
                    </h5>
                </div>