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
                            <h3 class="panel-title">Add Activity</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                All data inputted below, will <strong>ONLY</strong> be active this year.<br />
                                <small>
                                    I will have to have to code in later to handle re-accruing activities.
                                </small>
                            </p>
                            <form method="post" action="/postUpdateAdminActivity" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $activity->id }}">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $activity->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Question</label>
                                    <textarea type="text" class="form-control" id="description" name="description">{{ $activity->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="month">Month</label>
                                    <select name="month" class="form-control">
                                        <option selected value="{{ substr($activity->month,5,-12) }}">-- no change --</option>
                                        @for($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection