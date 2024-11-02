@extends('layouts.app') <!-- Substitua pelo layout que você estiver usando -->
 
@section('content')
<div class="container">
    <h1>Adicionar Novo Livro</h1>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
       
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" name="autor" class="form-control" required>
        </div>
       
        <div class="mb-3">
            <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" class="form-control" required min="1000" max="{{ date('Y') }}">
        </div>
       
        <div class="mb-3">
            <label for="resumo" class="form-label">Resumo</label>
            <textarea name="resumo" class="form-control" rows="3"></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
        <a href="{{ route('livros.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection