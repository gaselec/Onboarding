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
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" rows="10" cols="80">{{ old('description') }}</textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'description' );
                                    </script>
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