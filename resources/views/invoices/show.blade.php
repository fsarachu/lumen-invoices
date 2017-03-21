@extends('layouts.app')

@section('title', 'Comprobantes')

@section('content')
    <div class="ui text container">
        <h3 class="ui horizontal header divider">Comprobante Nro. {{$invoice->id}}</h3>
        <pre>{{ json_encode($invoice, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) }} </pre>
    </div>
@endsection