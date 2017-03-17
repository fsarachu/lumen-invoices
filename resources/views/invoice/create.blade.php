@extends('layouts.app')

@section('title', 'Cargar Comprobante')

@section('content')
    <div class="ui container">
        <form class="ui invoice form fluid basic padded segment">
            <h3 class="ui horizontal divider header">Cargar Comprobante</h3>
            <div class="three fields">
                <div class="field">
                    <label for="date">Fecha</label>
                    <input id="date" name="date" placeholder="Seleccionar fecha" type="text">
                </div>
                <div class="field">
                    <label for="trip">Viaje</label>
                    <input id="trip" name="trip" placeholder="Identificador de viaje" type="text">
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
            <div class="three fields">
                <div class="field">
                    <label for="business_name">Empresa</label>
                    <input id="business_name" name="business_name" placeholder="Nombre de empresa" type="text">
                </div>
                <div class="field">
                    <label for="invoice_number">Nro recibo</label>
                    <input id="invoice_number" name="invoice_number" placeholder="Número del recibo" type="text">
                </div>
                <div class="field">
                    <label>Categoría</label>
                    <div class="ui dropdown search selection">
                        <input type="hidden" name="category">
                        <div class="default text">Seleccionar categoría</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="1">Transporte</div>
                            <div class="item" data-value="2">Alimentos</div>
                            <div class="item" data-value="3">Alojamiento</div>
                            <div class="item" data-value="4">Servicios</div>
                            <div class="item" data-value="5">Promoción</div>
                            <div class="item" data-value="6">Otros</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" rows="3"></textarea>
            </div>
            <div class="grouped fields">
                <div class="field">
                    <div class="ui checkbox">
                        <input id="include_rut" name="include_rut" value="true" type="checkbox">
                        <label for="include_rut">Incluye RUT empresa</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input id="assign_anii" name="assign_anii" value="true" type="checkbox">
                        <label for="assign_anii">Asignar a ANII</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input id="personal_spending" name="personal_spending" value="true" type="checkbox">
                        <label for="personal_spending">Gasto Personal</label>
                    </div>
                </div>
            </div>
            <input class="ui secondary submit large fluid button" value="Cargar" type="submit">
        </form>
    </div>
@endsection