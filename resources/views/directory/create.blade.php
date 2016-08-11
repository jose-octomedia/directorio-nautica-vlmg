@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/directory') }}">
                            {{ csrf_field() }}
                            
                            
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="category_id" class="col-md-4 control-label">Categoría</label>
    
                                <div class="col-md-6">
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                    
                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
    
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Dirección</label>
    
                                <div class="col-md-6">
                                    <textarea class="form-control" name="address">{{old('address')}}</textarea>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Teléfono 1</label>
    
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
    
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
                                <label for="phone2" class="col-md-4 control-label">Teléfono 2</label>
    
                                <div class="col-md-6">
                                    <input id="phone2" type="text" class="form-control" name="phone2" value="{{ old('phone2') }}">
    
                                    @if ($errors->has('phone2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('phone3') ? ' has-error' : '' }}">
                                <label for="phone3" class="col-md-4 control-label">Teléfono 3</label>
    
                                <div class="col-md-6">
                                    <input id="phone3" type="text" class="form-control" name="phone3" value="{{ old('phone3') }}">
    
                                    @if ($errors->has('phone3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                                <label for="cellphone" class="col-md-4 control-label">Celular</label>
    
                                <div class="col-md-6">
                                    <input id="cellphone" type="text" class="form-control" name="cellphone" value="{{ old('cellphone') }}">
    
                                    @if ($errors->has('cellphone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cellphone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                <label for="fax" class="col-md-4 control-label">Fax</label>
    
                                <div class="col-md-6">
                                    <input id="fax" type="text" class="form-control" name="fax" value="{{ old('fax') }}">
    
                                    @if ($errors->has('fax'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fax') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('radio_frecuency') ? ' has-error' : '' }}">
                                <label for="radio_frecuency" class="col-md-4 control-label">Frecuencia de radio</label>
    
                                <div class="col-md-6">
                                    <input id="radio_frecuency" type="text" class="form-control" name="radio_frecuency" value="{{ old('radio_frecuency') }}">
    
                                    @if ($errors->has('radio_frecuency'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('radio_frecuency') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                <label for="contact" class="col-md-4 control-label">Contact</label>
    
                                <div class="col-md-6">
                                    <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}">
    
                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                <label for="website" class="col-md-4 control-label">Sitio web</label>
    
                                <div class="col-md-6">
                                    <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}">
    
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('confirmed') ? ' has-error' : '' }}">
                                <label for="confirmed" class="col-md-4 control-label">Confirmado</label>
    
                                <div class="col-md-6">
                                    <input id="confirmed" type="checkbox" class="form-control" name="confirmed" value="{{ old('confirmed') }}">
    
                                    @if ($errors->has('confirmed'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('confirmed') }}</strong>
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

