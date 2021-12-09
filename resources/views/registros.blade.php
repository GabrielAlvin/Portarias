@extends('layouts.app')

@section('content')
@include('layouts.navbar.nav')
<div class="container m-5">
    <table class="table text-center">
        <thead class="table-light">    
            <tr> 
                <th class="col-5">Nome</th>
                <th class="col-5">CPF</th>
                <th class="col-2">Registros</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <th class="col-5">{{$registro->nome}}</th>
                    <th class="col-5">{{$registro->cpf}}</th>
                    <th class="col-1"><a type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$registro->id}}">Ver mais</a></th>
                <tr>
            @endforeach
        </tbody>
    </table>
    @foreach ($registros as $registro)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$registro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$registro->nome}}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <img class="img-fluid" src="{{url('storage/registros/')}}/{{$registro->foto}}">
                            </div>  
                            <div class="col-7">
                                {{$registro->nome}}
                                {{$registro->cpf}}
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    @endforeach
</div>
@endsection