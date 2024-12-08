<div class="container mt-4">
    <form action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="mb-3">
            <label for="task_name" class="form-label">Nome da Tarefa</label>
            <input type="text" class="form-control" id="task_name" name="task_name" value="{{ $task->task_name ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Hora de Início</label>
            <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $task->start_time ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="end_time" class="form-label">Hora de Fim</label>
            <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $task->end_time ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($task) ? 'Atualizar' : 'Adicionar' }} Tarefa</button>
    </form>
</div>
