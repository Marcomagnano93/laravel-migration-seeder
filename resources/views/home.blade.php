@extends('layouts.app')

@section('title', 'home')

@section('content')
    <div class="container">
        <h1>Trains</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#Codice</th>
                <th scope="col">Azienda</th>
                <th scope="col">Partenza</th>
                <th scope="col">Destinazione</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">N Carrozze</th>
                <th scope="col">Note</th>
                <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($trains as $train)
                <tr>
                <th scope="row">{{ $train->train_code }}</th>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure }}</td>
                <td>{{ $train->destination }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_carriages }}</td>     
                <td>
                    @if ($train->in_time === 0 && $train->canceled === 0)<span class="blue">RITARDO</span>
                    @elseif ($train->in_time === 0 && $train->canceled === 1)
                    @else <span>In orario</span>@endif
                </td>
                <td>@if ($train->canceled === 1)<span class="red">CANCELLATO</span>@endif</td>
                </tr>
            @endforeach   
            </tbody>
        </table>
    </div>
@endsection