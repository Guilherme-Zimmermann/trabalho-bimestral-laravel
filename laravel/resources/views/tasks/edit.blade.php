<div>
    @extends('layouts.app')

    @section('content')
        @include('components.header')

        <div class="container mt-4">
            <h2>Editar Tarefa</h2>

            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="task_name" class="form-label">Nome da Tarefa</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" value="{{ old('task_name', $task->task_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="start_time" class="form-label">Hora de Início</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $task->start_time) }}" required>
                </div>

                <div class="mb-3">
                    <label for="end_time" class="form-label">Hora de Fim</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $task->end_time) }}" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pendente</option>
                        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Concluída</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar Tarefa</button>
            </form>
        </div>

        @include('components.footer')
    @endsection
</div>
