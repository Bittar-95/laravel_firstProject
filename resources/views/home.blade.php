@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Task</th>
                                <th scope="col">Action</th>
                            </tr>
                    @foreach($tasks as $task)

                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{($task['task'])}}</td>
                                    <td><a href="/delete/{{($task['id'])}}">DELETE</a> || <a href="edit/{{($task['id'])}}">EDIT</a> </td>
                                </tr>



                        @endforeach
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
