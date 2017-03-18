<?php

namespace App\Http\Controllers;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create');
    }
}
