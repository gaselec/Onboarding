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
                            <h3 class="panel-title">Add Quiz</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/adminQuiz" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="questions">Questions</label>
                                    <textarea name="questions" id="questions" rows="10" cols="80">{{ old('questions') }}</textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'questions' );
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label for="answers">Answers</label>
                                    <textarea class="form-control" name="answers" >{{ old('answers') }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-default">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection