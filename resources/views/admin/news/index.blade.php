@extends('layouts.admin')
@section('content-header-title', 'Виды занятий')
@section('content')

    <div class="row">
        {{--Изменить занятия--}}
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Занятия
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-wrap text-center">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th colspan="3" class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fcs as $fc)
                            <tr>
                                <td>{{$fc->name ?? 'Не указано'}}</td>

                                <td> <a href="{{route('admin.schedule.fitness-classes.edit', $fc)}}"><i title="Смотреть"
                                                                                                     class="fas fa-eye"></i></a>
                                </td>
                                <td><a href="{{route('admin.schedule.fitness-classes.edit', $fc)}}"><i title="Просмотреть и изменить" class="far fa-edit"></i></a></td>
                                <td>
                                    <form action="{{route('admin.schedule.fitness-classes.delete', $fc)}}" method="post">
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

        {{--Добавить занятия--}}
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Добавить занятие</div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('admin.schedule.fitness-classes.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Название занятия</label>
                            <input placeholder="Новое занятие" required class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Описание занятия</label>
                            <input placeholder="Совершенно новое занятие в фитнес-клубе" class="form-control" type="text" name="description">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
