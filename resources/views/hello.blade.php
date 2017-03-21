@extends('layouts.app')

@section('title', 'Hello!')

@section('content')
    <div class="ui container">
        <div class="ui masthead vertical center aligned segment">
            <h1 class="ui horizontal divider header">Comprobantes</h1>
            <div class="ui two column grid">
                <div class="column">
                    <a href="/invoices/new" class="ui primary fluid button">Cargar</a>
                </div>
                <div class="column">
                    <a href="/invoices" class="ui secondary fluid button">Listar</a>
                </div>
            </div>
        </div>
    </div>
@endsection