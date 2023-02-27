@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1 class="my-5">Trains Schedule</h1>
    <ul>
        @foreach ($trains as $train)
            <li class="mb-5">
                <ul>
                    <h4>TRAIN</h4>
                    <li><strong>COMPANY: </strong>{{ $train->company }}</li>
                    <li><strong>DEP STATION: </strong>{{ $train->departure_station }}</li>
                    <li><strong>ARR STATION: </strong>{{ $train->arrival_station }}</li>
                    <li><strong>DEP TIME: </strong>{{ $train->departure_time }}</li>
                    <li><strong>ARR TIME: </strong>{{ $train->arrival_time }}</li>
                    <li><strong>CODE: </strong>{{ $train->train_code }}</li>
                    <li><strong>N CARRIAGE: </strong>{{ $train->n_carriage }}</li>
                    <li><strong>STATE: </strong>@if ($train->is_canceled) CANC @elseif ($train->in_time) ON-TIME @else LATE @endif</li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection