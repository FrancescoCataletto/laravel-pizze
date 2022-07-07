@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.pizzas.update', $pizza) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" 
          value="{{old('nome', $pizza->nome)}}" placeholder="Nome pizza">
        </div>
        
        <div class="form-group">
          <label for="prezzo">Prezzo</label>
          <input type="number" class="form-control" id="prezzo" name="prezzo" 
          value="{{old('prezzo', $pizza->prezzo)}}" placeholder="Prezzo">
        </div>

        <div class="form-group">
          <label for="ingredienti">Ingredienti</label>
          <input type="text" class="form-control" id="ingredienti" name="ingredienti" 
          value="{{old('ingredienti', $pizza->ingredienti)}}" placeholder="Ingredienti">
        </div>

        <div class="form-group">
          <label for="popolarita">Popolarita</label>
          <input type="number" class="form-control" id="popolarita" name="popolarita" 
          value="{{old('popolarita', $pizza->popolarita)}}" placeholder="Popolarità">
        </div>

        <div class="mb-3">
            <p>Vegetariana: </p>
            <label for="vegetariana" class="form-label">sì</label>
            <input type="radio" value="1" name="vegetariana" id="vegetariana">
            <label for="vegetariana" class="form-label">no</label>
            <input type="radio" value="0" name="vegetariana" id="vegetariana">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection