@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.nav')
            <div class="col-md-8">
            @include('alerts')
            <!-- add calendar from VUE -->
                <div class="tab-content">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">List of quizzes</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quizzes as $quiz)
                                        <tr>
                                            <td>{{ $quiz->id }}</td>
                                            <td>{{ $quiz->name }}</td>
                                            <td>{!! $quiz->description !!}</td>
                                            <td>{{ $quiz->created_at }}</td>
                                            <td>
                                                <a href="/adminQuiz/{{ $quiz->id }}">Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete this quiz?');" href="/removeAdminQuiz/{{ $quiz->id }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/adminAddQuiz" class="btn btn-sm btn-primary">Add New Quiz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection