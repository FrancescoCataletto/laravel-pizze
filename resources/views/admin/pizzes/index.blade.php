@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PREZZO</th>
            <th scope="col">INGREDIENTI</th>
            <th scope="col">VEGETARIANA</th>
            <th scope="col">AZIONI</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id}}</td>
                    <td>{{$pizza->nome}}</td>
                    <td>{{$pizza->prezzo}}</td>
                    <td>{{$pizza->ingredienti}}</td>
                    <td>
                        @if ($pizza->vegetariana === 0)
                            NO
                        @else
                            SI
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">SHOW</a>
                        <a href="" class="btn btn-success">EDIT</a>
                        <a href="" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
      </table>
</div>
@endsection