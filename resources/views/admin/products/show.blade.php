@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.product.fields.RazonSocial') }}
                    </th>
                    <td>
                        {{ $product->RazonSocial }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Giro') }}
                    </th>
                    <td>
                        {!! $product->Giro !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Telefono') }}
                    </th>
                    <td>
                        {{ $product->Telefono }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Direccion') }}
                    </th>
                    <td>
                        {{ $product->Direccion }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Zona') }}
                    </th>
                    <td>
                        {{ $product->Zona }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Ciudad') }}
                    </th>
                    <td>
                        {{ $product->Ciudad }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Estado') }}
                    </th>
                    <td>
                        {{ $product->Estado }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Contacto') }}
                    </th>
                    <td>
                        {{ $product->Contacto }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.Correo') }}
                    </th>
                    <td>
                        {{ $product->Correo }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection