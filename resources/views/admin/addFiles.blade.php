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
                            <h3 class="panel-title">Upload Files</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/postAdminFile" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">File Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="description">File Description</label>
                                    <textarea class="form-control" name="description" >{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="name">File</label>
                                    <input type="file" name="file">
                                </div>

                                <button type="submit" class="btn btn-default">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection