@extends('errors::minimal')

@section('title', __('No permitido'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'No tiene acceseso como administrador'))
