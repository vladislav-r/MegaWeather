@extends('layouts.admin')
@section('content-header-title', 'Изменение зала')

@section('content-header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.schedule.rooms.index')}}">Залы</a></li>
    <li class="breadcrumb-item active">{{$room->name}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{route('admin.schedule.rooms.update', $room->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="name">Название зала</label>
                    <input required class="form-control" type="text" name="name" value="{{$room->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Описание зала</label>
                    <input class="form-control" type="text" name="description" value="{{$room->description}}">
                </div>
                <a class="btn btn-secondary" href="{{ route('admin.schedule.rooms.index')}}">Отмена</a>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
