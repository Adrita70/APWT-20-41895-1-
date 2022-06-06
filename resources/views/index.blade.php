@extends('layout.main')
@section('content')
   <br><br>
    <table>
        <tr>
            <th>Prod. name</th>
            <th>Prod. price</th>
        </tr>
        @foreach($services as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection