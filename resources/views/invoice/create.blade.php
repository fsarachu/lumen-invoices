@extends('layouts.app')

@section('title', 'Cargar Comprobante')

@section('content')
    <div class="ui container">
        <form class="ui invoice form fluid basic padded segment">
            <h3 class="ui horizontal divider header">Cargar Comprobante</h3>
            <div class="three fields">
                <div class="field">
                    <label>Fecha</label>
                    <input placeholder="Seleccionar fecha" type="text">
                </div>
                <div class="field">
                    <label>Viaje</label>
                    <input placeholder="Identificador de viaje" type="text">
                </div>
                <div class="field">
                    <label>País</label>
                    <div class="ui dropdown search selection">
                        <input type="hidden" name="country">
                        <div class="default text">Seleccionar País</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="ar"><i class="ar flag"></i>Argentina</div>
                            <div class="item" data-value="bo"><i class="bo flag"></i>Bolivia</div>
                            <div class="item" data-value="br"><i class="br flag"></i>Brasil</div>
                            <div class="item" data-value="cl"><i class="cl flag"></i>Chile</div>
                            <div class="item" data-value="co"><i class="co flag"></i>Colombia</div>
                            <div class="item" data-value="cr"><i class="cr flag"></i>Costa Rica</div>
                            <div class="item" data-value="cu"><i class="cu flag"></i>Cuba</div>
                            <div class="item" data-value="ec"><i class="ec flag"></i>Ecuador</div>
                            <div class="item" data-value="sv"><i class="sv flag"></i>El Salvador</div>
                            <div class="item" data-value="gt"><i class="gt flag"></i>Guatemala</div>
                            <div class="item" data-value="ht"><i class="ht flag"></i>Haití</div>
                            <div class="item" data-value="hn"><i class="hn flag"></i>Honduras</div>
                            <div class="item" data-value="mx"><i class="mx flag"></i>México</div>
                            <div class="item" data-value="ni"><i class="ni flag"></i>Nicaragua</div>
                            <div class="item" data-value="pa"><i class="pa flag"></i>Panamá</div>
                            <div class="item" data-value="py"><i class="py flag"></i>Paraguay</div>
                            <div class="item" data-value="pe"><i class="pe flag"></i>Perú</div>
                            <div class="item" data-value="pr"><i class="pr flag"></i>Puerto Rico</div>
                            <div class="item" data-value="do"><i class="do flag"></i>República Dominicana</div>
                            <div class="item" data-value="uy"><i class="uy flag"></i>Uruguay</div>
                            <div class="item" data-value="ve"><i class="ve flag"></i>Venezuela</div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="ui secondary submit large fluid button" value="Cargar">
        </form>
    </div>
@endsection