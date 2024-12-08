<div>
    @extends('layouts.app')

    @section('content')
        @include('components.header')

        <div class="container mt-4">
            <h1>Lista de Tarefas</h1>

            @if($tasks->isEmpty())
                <p>Não há tarefas para exibir.</p>
            @else
                @include('components.tasks', ['tasks' => $tasks])
            @endif

            <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-3">Adicionar Tarefa</a>
        </div>

        @include('components.footer')
    @endsection
</div>
