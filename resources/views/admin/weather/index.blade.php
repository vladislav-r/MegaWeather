@extends('layouts.admin')
@section('content-header-title', 'Залы')

@section('content-header-breadcrumbs')
    <li class="breadcrumb-item active">Залы</li>
@endsection

@section('content')

    <div class="row">
        {{--Изменить временные слоты--}}
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Залы
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-head-fixed text-wrap text-center">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Описание</th>
                            <th colspan="3" class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($weather as $w)
                            <tr>
                                <td>{{$w->temperature ?? 'Не указано'}}</td>
                                <td>{{$w->description ?? 'Не указано'}}</td>
                                <td>
                                    <a href="{{route('admin.schedule.rooms.edit', $w)}}"><i title="Смотреть"
                                                                                               class="fas fa-eye"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('admin.schedule.rooms.edit', $w)}}"><i title="Редактировать"
                                                                                               class="far fa-edit"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.schedule.rooms.delete', $w) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-transparent"><i title="Удалить" class="fa fa-solid fa-trash text-danger" role="button"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{--Добавить временные слоты--}}
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Добавить зал</div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.schedule.rooms.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Название зала</label>
                            <input required class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание зала</label>
                            <input value="" class="form-control" type="text" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
