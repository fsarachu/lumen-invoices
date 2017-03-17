@extends('layouts.app')

@section('title', 'Cargar Comprobante')

@section('content')
    <div class="ui container">
        <form class="ui invoice form fluid basic padded segment">
            <h3 class="ui horizontal divider header">Cargar Comprobante</h3>
            <input type="submit" class="ui secondary submit large fluid button" value="Cargar">
        </form>
    </div>
@endsection