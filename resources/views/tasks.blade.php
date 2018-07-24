@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        {{ Form::open(['method' => 'POST', 'route' => 'task.index', 'class' => 'form-horizontal']) }}
            <div class="form-group">
                {{ Form::label('task', trans('lang.lbl_task'), ['class' => 'col-sm-3 control-label']) }}
                <div class="col-sm-6">
                    {{ Form::text('name', null, ['id' => 'task-name', 'class' => 'form-control']) }}
                </div>
            </div>
            <!-- Add Task -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {{ Form::submit('<i class="fa fa-plus"></i>' . trans('lang.btn_add'), ['class' => 'btn btn-default']) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
    <!-- Current Tasks -->
    @if (count($tasks))
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('lang.lbl_current_task')
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>@lang('lang.lbl_task')</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                    {{ Form::open(['method' => 'POST', 'route' => ['task.destroy', $task->id]]) }}
                                        {{ method_field('DELETE') }}
                                        {{ Form::submit('<i class="fa fa-plus"></i>' . trans('lang.btn_delete'), ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
