<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Currency;
use App\PaymentMethod;

class InvoiceController extends Controller
{
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $currencies = Currency::orderBy('name')->get();
        $payment_methods = PaymentMethod::orderBy('name')->get();

        return view('invoices.create', compact('categories', 'countries', 'currencies', 'payment_methods'));
    }
}
