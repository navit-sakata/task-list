@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>タスク管理</h2>
    </div>

    @if (isset($tasks))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($tasks as $task)
                <tr>
                    <td><a class="link link-hover text-info" href="{{ route('task.show', $task->id) }}">{{ $task->id }}</a></td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- メッセージ作成ページへのリンク --}}
    <a class="btn btn-primary" href="{{ route('task.create') }}">タスク追加</a> 
@endsection