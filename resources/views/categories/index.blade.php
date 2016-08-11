@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Categorías</h1>
                <div class="pull-right">
                    <a href="{{ url('/categories/create') }}" class="btn btn-primary pull-right" role="button">Agregar categoría</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Categoría</th>
                            <th>Fecha de creación</th>
                            <th>Última actualización</th>
                            <th>&nbsp;</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->category}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href='{{url("/categories/$category->id/edit")}}' class=" btn btn-default glyphicon glyphicon-pencil"></a>
                                        </div>
                                        
                                        <div class="btn-group" role="group" aria-label="">
                                            <form action='{{url("/categories/$category->id")}}' method="post" class="delete-confirmation">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-default glyphicon glyphicon-remove"></button>
                                            </form>
                                        </div>
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