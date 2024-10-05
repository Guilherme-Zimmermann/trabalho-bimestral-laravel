@extends('layouts.app')

@section('content')
    <h1>Financeiro</h1>

    <button class="btn btn-primary" data-toggle="modal" data-target="#newFinanceModal">Cadastrar Nova Conta</button>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finances as $finance)
                <tr>
                    <td>{{ $finance->description }}</td>
                    <td>R$ {{ number_format($finance->value, 2, ',', '.') }}</td>
                    <td>{{ $finance->type == 'pagar' ? 'A Pagar' : 'A Receber' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('finances.modal')
@endsection
