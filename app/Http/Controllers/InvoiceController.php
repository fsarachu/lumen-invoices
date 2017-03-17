<?php

namespace App\Http\Controllers;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoice.create');
    }
}
