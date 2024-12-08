<div>
    @extends('layouts.app')

    @section('content')
        @include('components.header')

        @include('components.tasks-form', ['task' => isset($task) ? $task : null])

        @include('components.footer')
    @endsection
</div>
