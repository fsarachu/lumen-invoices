<?php

namespace App\Http\Controllers;

use App\Country;

class InvoiceController extends Controller
{
    public function create()
    {
        $countries = Country::all();

        return view('invoices.create', compact('countries'));
    }
}
