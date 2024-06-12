@extends('layouts.app')

@section('content')
    <h1 class="text-center">Trains</h1>
    <table class="table table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Data di partenza</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Treno numero</th>
                <th scope="col">Numero di carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_train}}</td>
                    <td>{{$train->departureStation}}</td>
                    <td>{{$train->arrivalStation}}</td>
                    <td>{{$train->departureTime}}</td>
                    <td>{{$train->arrivalTime}}</td>
                    <td>{{$train->trainNumber}}</td>
                    <td>{{$train->carriagesNumber}}</td>
                    @if ($train->inTime)
                        <td> {{$train->inTime='Si'}}</td>
                    @else
                        <td>{{$train->inTime='No'}}</td>
                    @endif
                    @if ($train->cancelled)
                        <td>{{$train->cancelled='Si'}}</td>
                    @else
                        <td>{{$train->cancelled='No'}}</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
