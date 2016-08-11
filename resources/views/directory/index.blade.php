@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Directorio</h1>
                <div class="pull-right">
                    <a href="{{ url('/directory/create') }}" class="btn btn-primary pull-right" role="button">Agregar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped directory-table">
                        <tr>
                            <th>&nbsp;</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfonos</th>
                            <th>Celular</th>
                            <th>Fax</th>
                            <th>Frecuencia de radio</th>
                            <th>Contacto</th>
                            <th>Email</th>
                            <th>Sitio web</th>
                            <th>Fecha de creación</th>
                            <th>Última actualización</th>
                        </tr>

                        @foreach($directory as $item)
                            <tr>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                                        
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href='{{url("/directory/$item->id")}}' class=" btn btn-default glyphicon glyphicon-zoom-in"></a>
                                        </div>
                                        
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href='{{url("/directory/$item->id/edit")}}' class=" btn btn-default glyphicon glyphicon-pencil"></a>
                                        </div>
                                        
                                        <div class="btn-group" role="group" aria-label="">
                                            <form action='{{url("/directory/$item->id")}}' method="post" class="delete-confirmation">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-default glyphicon glyphicon-remove"></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    {{$item->phone}}
                                    @if($item->phone2 != '')
                                        <br>{{$item->phone2}}
                                    @endif
                                    @if($item->phone3 != '')
                                        <br>{{$item->phone3}}
                                    @endif
                                </td>
                                <td>{{$item->cellphone}}</td>
                                <td>{{$item->fax}}</td>
                                <td>{{$item->radio_frecuency}}</td>
                                <td>{{$item->contact}}</td>
                                <td>
                                    <a href="mailto:{{$item->email}}">
                                        {{$item->email}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{$item->website}}" target="_blank">
                                        {{$item->website}}
                                    </a>
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection