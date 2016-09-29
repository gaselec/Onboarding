@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.nav')
            <div class="col-md-8">
                @include('alerts')
                <div class="tab-content">
                    <div class="panel panel-default">
                        <div class="panel-heading">Quizzes</div>
                        <div class="panel-body">

                            @if(count($quizes) > 0)
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($quizes as $quiz)
                                            <tr>
                                                <td>
                                                    {{ $quiz->id }}
                                                </td>
                                                <td>
                                                    {{ $quiz->title }}
                                                </td>
                                                <td>
                                                    <a href="/quiz/{{ $quiz->id }}">Take quiz</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>
                                    Sorry no quzzes to display
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection