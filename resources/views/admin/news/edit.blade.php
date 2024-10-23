@extends('layouts.admin')
@section('content-header-title', 'Изменение занятия')
@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{route('admin.schedule.fitness-classes.update', $fc->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="name">Название занятия</label>
                    <input required class="form-control" type="text" name="name" value="{{$fc->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Описание занятия</label>
                    <input class="form-control" type="text" name="description" value="{{$fc->description}}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Добавить</button>
            </form>
        </div>
    </div>
@endsection
