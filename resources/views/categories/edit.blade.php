@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar categoría</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action='{{ url("/categories/$category->id") }}'>
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
    
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="category" class="col-md-4 control-label">Categoría</label>
    
                                <div class="col-md-6">
                                    <input id="category" type="text" class="form-control" name="category" value="{{ $category->category }}">
    
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

