@extends('layouts.main')

@section('title', 'Detalhes do Personagem')

@section('content')
@if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('msg') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
    <div class="cel d-flex justify-content-center text-center">
        <div class="card col-lg-9 mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/img/personagens/{{ $personagem->imagem }}" class="card-img-top" width="300" height="400" alt="{{ $personagem->nome }}">
                    </div>
                    <div class="col-lg-6 text-start">
                        <table>
                            <tr>
                                <th>Nome: </th>
                                <td>{{ $personagem->nome }}</td>
                            </tr>
                            <tr>
                                <th>Classe: </th>
                                <td>{{ $personagem->classe }}</td>
                            </tr>
                            <tr>
                                <th>Raça: </th>
                                <td>{{ $personagem->raca }}</td>
                            </tr>
                            <tr>
                                <th>Nível: </th>
                                <td>{{ $personagem->nivel }}</td>
                            </tr>
                        </table>
                        <div class="text-end">
                            <a class="button btn" href="{{ route('personagens.index') }}">Voltar</a>
                            @if(Auth::user()->id == $personagem->usuario)
                                <a class="button btn" style="background-color: #FFD700; color: white" href="{{ route('personagens.edit', $personagem->id)}}">Editar</a>
                                <form action="{{ route('personagens.destroy', $personagem->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
