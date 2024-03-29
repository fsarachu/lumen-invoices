@extends('layouts.app')

@section('title', 'Hello!')

@section('content')
    <div class="ui grid text container">
        <div class="row">
            <div class="column">
                <h2 class="ui horizontal divider header">Comprobantes</h2>
            </div>
        </div>
        <div class="two column row">
            <div class="column">
                <a href="/invoices/new" class="ui primary fluid button">Cargar</a>
            </div>
            <div class="column">
                <a href="/invoices" class="ui secondary fluid button">Listar</a>
            </div>
        </div>
    </div>
@endsection