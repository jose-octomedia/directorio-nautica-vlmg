@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Usuarios</h1>
                <div class="pull-right">
                    <a href="{{ url('/users/create') }}" class="btn btn-primary pull-right" role="button">Agregar usuario</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha de creación</th>
                            <th>Última actualización</th>
                            <th>&nbsp;</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href='{{url("/users/$user->id/edit")}}' class=" btn btn-default glyphicon glyphicon-pencil"></a>
                                        </div>
                                        
                                        @if($user->id != 1)
                                            <div class="btn-group" role="group" aria-label="">
                                                <form action='{{url("/users/$user->id")}}' method="post" class="delete-confirmation">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-default glyphicon glyphicon-remove"></button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection