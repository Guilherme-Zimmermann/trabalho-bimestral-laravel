@extends('layouts.app')

@section('content')
    <h1>Usuários</h1>

    <button class="btn btn-primary" data-toggle="modal" data-target="#newUserModal">Cadastrar Novo Usuário</button>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->position }}</td>
                    <td>{{ $user->education }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('users.modal')
@endsection
