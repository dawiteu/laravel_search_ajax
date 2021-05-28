@extends('layouts.index')


@section('content')
    <div class="d-flex justify-content-between">
        <h1>Bienvenu le site</h1> 
        <form action="{{route('search')}}" class="d-inline" method="GET">
            {{-- @csrf --}}
            <input type="text" name="q" id="search" />
        </form>
    </div> 

    <table class="mt-3 table table-striped text-center">
        <tr>
            <td>#</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
        </tr>
        
        <tbody id="results"></tbody>

    </table>

@endsection