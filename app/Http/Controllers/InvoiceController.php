<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\PaymentMethod;

class InvoiceController extends Controller
{
    public function create()
    {
        $countries = Country::all();
        $categories = Category::all();
        $payment_methods = PaymentMethod::all();

        return view('invoices.create', compact('countries', 'categories', 'payment_methods'));
    }
}
