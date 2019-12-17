@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.client.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.clients.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('RazonSocial') ? 'has-error' : '' }}">
                <label for="RazonSocial">{{ trans('global.client.fields.RazonSocial') }}*</label>
                <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" value="{{ old('RazonSocial', isset($client) ? $client->RazonSocial : '') }}">
                @if($errors->has('RazonSocial'))
                    <em class="invalid-feedback">
                        {{ $errors->first('RazonSocial') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.RazonSocial_helper') }}
                </p>
            </div>
            <!-- -->
            <div class="form-group {{ $errors->has('Giro') ? 'has-error' : '' }}">
                <label for="Giro">{{ trans('global.client.fields.Giro') }}*</label>
                <input type="text" id="Giro" name="Giro" class="form-control" value="{{ old('name', isset($client) ? $client->name : '') }}">
                @if($errors->has('Giro'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Giro') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Giro_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Telefono') ? 'has-error' : '' }}">
                <label for="Telefono">{{ trans('global.client.fields.Telefono') }}*</label>
                <input type="text" id="Telefono" name="Telefono" class="form-control" value="{{ old('Telefono', isset($client) ? $client->Telefono : '') }}">
                @if($errors->has('Telefono'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Telefono') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Telefono_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Direccion') ? 'has-error' : '' }}">
                <label for="Direccion">{{ trans('global.client.fields.Direccion') }}*</label>
                <input type="text" id="Direccion" name="Direccion" class="form-control" value="{{ old('Direccion', isset($client) ? $client->Direccion : '') }}">
                @if($errors->has('Direccion'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Direccion') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Direccion_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Zona') ? 'has-error' : '' }}">
                <label for="Zona">{{ trans('global.client.fields.Zona') }}*</label>
                <input type="text" id="Zona" name="Zona" class="form-control" value="{{ old('Zona', isset($client) ? $client->Zona : '') }}">
                @if($errors->has('Zona'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Zona') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Zona_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Ciudad') ? 'has-error' : '' }}">
                <label for="Ciudad">{{ trans('global.client.fields.Ciudad') }}*</label>
                <input type="text" id="Ciudad" name="Ciudad" class="form-control" value="{{ old('Ciudad', isset($client) ? $client->Ciudad : '') }}">
                @if($errors->has('Ciudad'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Ciudad') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Ciudad_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Estado') ? 'has-error' : '' }}">
                <label for="Estado">{{ trans('global.client.fields.Estado') }}*</label>
                <input type="text" id="Estado" name="Estado" class="form-control" value="{{ old('Estado', isset($client) ? $client->Estado : '') }}">
                @if($errors->has('Estado'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Estado') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Estado_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Contacto') ? 'has-error' : '' }}">
                <label for="Contacto">{{ trans('global.client.fields.Contacto') }}*</label>
                <input type="text" id="Contacto" name="Contacto" class="form-control" value="{{ old('Contacto', isset($client) ? $client->Contacto : '') }}">
                @if($errors->has('Contacto'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Contacto') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Contacto_helper') }}
                </p>
            </div>
                 <!-- -->
                 <div class="form-group {{ $errors->has('Correo') ? 'has-error' : '' }}">
                <label for="Correo">{{ trans('global.client.fields.Correo') }}*</label>
                <input type="text" id="Correo" name="Correo" class="form-control" value="{{ old('Correo', isset($client) ? $client->Correo : '') }}">
                @if($errors->has('Correo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Correo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.Correo_helper') }}
                </p>
            </div>
            <!--<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.client.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($client) ? $client->description : '') }}</textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('global.client.fields.price') }}</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($client) ? $client->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.client.fields.price_helper') }}
                </p>
            </div> -->

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection