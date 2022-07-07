@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Ingredienti</th>
            <th scope="col">Popolarit&agrave;</th>
            <th scope="col">Vegetariana</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id}}</td>
                    <td>{{$pizza->nome}}</td>
                    <td>{{$pizza->prezzo}}</td>
                    <td>{{$pizza->ingredienti}}</td>
                    <td>{{$pizza->popolarita}}</td>
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