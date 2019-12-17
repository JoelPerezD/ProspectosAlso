@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.client.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.client.fields.RazonSocial') }}
                    </th>
                    <td>
                        {{ $client->RazonSocial }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Giro') }}
                    </th>
                    <td>
                        {!! $client->Giro !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Telefono') }}
                    </th>
                    <td>
                        {{ $client->Telefono }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Direccion') }}
                    </th>
                    <td>
                        {{ $client->Direccion }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Zona') }}
                    </th>
                    <td>
                        {{ $client->Zona }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Ciudad') }}
                    </th>
                    <td>
                        {{ $client->Ciudad }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Estado') }}
                    </th>
                    <td>
                        {{ $client->Estado }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Contacto') }}
                    </th>
                    <td>
                        {{ $client->Contacto }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.client.fields.Correo') }}
                    </th>
                    <td>
                        {{ $client->Correo }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection