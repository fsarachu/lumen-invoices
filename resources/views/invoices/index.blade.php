@extends('layouts.app')

@section('title', 'Comprobantes')

@section('content')
    <div class="ui container">
        <div class="ui one column wide grid">
            <div class="column">
                <h3 class="ui horizontal header divider">Listado de Comprobantes</h3>
            </div>

            <div class="column">
                <table class="ui unstackable selectable celled table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th class="right aligned">Moneda</th>
                        <th class="right aligned">Monto</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->id }}</td>
                            <td>{{ $invoice->date }}</td>
                            <td class="right aligned">{{ $invoice->currency_id }}</td>
                            <td class="right aligned">{{ $invoice->amount_in_original_currency }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection