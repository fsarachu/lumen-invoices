@extends('layouts.app')

@section('title', 'Comprobantes')

@section('content')
    <div class="ui container">
        <div class="ui one column wide grid">
            <div class="column">
                <h3 class="ui horizontal header divider">Comprobante Nro. {{$invoice->id}}</h3>
            </div>
            <div class="column">
                <pre>{{ json_encode($invoice, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) }} </pre>
            </div>
        </div>
    </div>
@endsection