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
        $categories = Category::all();
        $countries = Country::all();
        $currencies = Currency::all();
        $payment_methods = PaymentMethod::all();

        return view('invoices.create', compact('categories', 'countries', 'currencies', 'payment_methods'));
    }
}
