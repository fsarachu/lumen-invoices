@extends('layouts.app')

@section('title', 'Comprobantes')

@section('content')
    <div class="ui container">
        <div class="ui one column wide grid">
            <div class="column">
                <h3 class="ui horizontal header divider">Listado de Comprobantes</h3>
            </div>

            <div class="column">
                <table class="ui unstackable single line basic table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Moneda</th>
                        <th class="right aligned">Monto</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td class="selectable"><a href="/invoices/{{ $invoice->id }}">{{ $invoice->id }}</a></td>
                            <td>{{ Carbon\Carbon::parse($invoice->date)->format('d/m/y') }}</td>
                            <td>
                                @if($invoice->has('currency'))
                                    <i class="{{$invoice->currency->iso_2}} flag"></i> {{ $invoice->currency->iso_3 }}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="right aligned">{{$invoice->currency->symbol}} {{ $invoice->amount_in_original_currency }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection