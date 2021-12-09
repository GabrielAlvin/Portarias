@extends('layouts.app')

@section('content')
@include('layouts.navbar.nav')
<div class="container p-5">
    <form action="{{ route('home.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" class="row">
        @csrf
        <div class="col-6 mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-6 mb-3">
            <label for="formGroupExampleInput" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="col-6 mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" accept="image/*" name="foto">
        </div>
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>
@endsection
