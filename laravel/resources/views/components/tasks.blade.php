{{-- resources/views/components/tasks.blade.php --}}
<div class="container mt-4">
    @foreach ($tasks as $task)
        <div class="card mb-3"
             style="background-color: {{ $task->status == 'completed' ? '#28a745' : '#6c757d' }}; color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <div class="d-flex align-items-center">
                        <h5 class="card-title" style="text-decoration: {{ $task->status == 'completed' ? 'line-through' : 'none' }};">
                            {{ $task->task_name }}
                        </h5>
                        @if ($task->status == 'completed')
                            <span class="badge bg-success ms-2 d-flex align-items-center justify-content-center" style="height: 38px; padding: 6px 12px;">
                                Concluída
                            </span>
                        @endif
                    </div>
                    <p>{{ $task->start_time }} - {{ $task->end_time }}</p>
                </div>
                <div class="d-flex gap-2">
                    @if ($task->status == 'pending')
                        <form action="{{ route('tasks.complete', $task) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success" style="height: 38px;">
                                <i class="bi bi-check-circle"></i> Concluir
                            </button>
                        </form>
                    @endif

                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning" style="height: 38px;">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="height: 38px;">
                            <i class="bi bi-trash"></i> Deletar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
