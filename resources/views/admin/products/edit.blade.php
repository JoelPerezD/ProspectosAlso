@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.update", [$product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('RazonSocial') ? 'has-error' : '' }}">
                <label for="RazonSocial">{{ trans('global.product.fields.RazonSocial') }}*</label>
                <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" value="{{ old('RazonSocial', isset($product) ? $product->RazonSocial : '') }}">
                @if($errors->has('RazonSocial'))
                    <em class="invalid-feedback">
                        {{ $errors->first('RazonSocial') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.RazonSocial_helper') }}
                </p>
            </div>
            <!-- -->
            <div class="form-group {{ $errors->has('Giro') ? 'has-error' : '' }}">
                <label for="Giro">{{ trans('global.product.fields.Giro') }}*</label>
                <input type="text" id="Giro" name="Giro" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                @if($errors->has('Giro'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Giro') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Giro_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Telefono') ? 'has-error' : '' }}">
                <label for="Telefono">{{ trans('global.product.fields.Telefono') }}*</label>
                <input type="text" id="Telefono" name="Telefono" class="form-control" value="{{ old('Telefono', isset($product) ? $product->Telefono : '') }}">
                @if($errors->has('Telefono'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Telefono') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Telefono_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Direccion') ? 'has-error' : '' }}">
                <label for="Direccion">{{ trans('global.product.fields.Direccion') }}*</label>
                <input type="text" id="Direccion" name="Direccion" class="form-control" value="{{ old('Direccion', isset($product) ? $product->Direccion : '') }}">
                @if($errors->has('Direccion'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Direccion') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Direccion_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Zona') ? 'has-error' : '' }}">
                <label for="Zona">{{ trans('global.product.fields.Zona') }}*</label>
                <input type="text" id="Zona" name="Zona" class="form-control" value="{{ old('Zona', isset($product) ? $product->Zona : '') }}">
                @if($errors->has('Zona'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Zona') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Zona_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Ciudad') ? 'has-error' : '' }}">
                <label for="Ciudad">{{ trans('global.product.fields.Ciudad') }}*</label>
                <input type="text" id="Ciudad" name="Ciudad" class="form-control" value="{{ old('Ciudad', isset($product) ? $product->Ciudad : '') }}">
                @if($errors->has('Ciudad'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Ciudad') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Ciudad_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Estado') ? 'has-error' : '' }}">
                <label for="Estado">{{ trans('global.product.fields.Estado') }}*</label>
                <input type="text" id="Estado" name="Estado" class="form-control" value="{{ old('Estado', isset($product) ? $product->Estado : '') }}">
                @if($errors->has('Estado'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Estado') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Estado_helper') }}
                </p>
            </div>
              <!-- -->
              <div class="form-group {{ $errors->has('Contacto') ? 'has-error' : '' }}">
                <label for="Contacto">{{ trans('global.product.fields.Contacto') }}*</label>
                <input type="text" id="Contacto" name="Contacto" class="form-control" value="{{ old('Contacto', isset($product) ? $product->Contacto : '') }}">
                @if($errors->has('Contacto'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Contacto') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Contacto_helper') }}
                </p>
            </div>
                 <!-- -->
                 <div class="form-group {{ $errors->has('Correo') ? 'has-error' : '' }}">
                <label for="Correo">{{ trans('global.product.fields.Correo') }}*</label>
                <input type="text" id="Correo" name="Correo" class="form-control" value="{{ old('Correo', isset($product) ? $product->Correo : '') }}">
                @if($errors->has('Correo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('Correo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.Correo_helper') }}
                </p>
            </div>
            <!--
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.product.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('global.product.fields.price') }}</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($product) ? $product->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.price_helper') }}
                </p>
            </div> -->
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection