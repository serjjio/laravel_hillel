@extends('main')


@section('content')
    <b><h1>{{ $nameStreet }}</h1></b>
    <table border="1">
        <tr>
            <th>Number</th>
            <th>Count Apartments</th>
            <th>Floors</th>
        </tr>
        @foreach($buildings as $building)
            <tr>
                <td>{{ $building->number }}</td>

                <td>{{$building->count_apartments}}</td>

                <td>{{ $building->note }}</td>
            </tr>
        @endforeach
    </table>

@endsection
