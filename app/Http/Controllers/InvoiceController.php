<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;

class InvoiceController extends Controller
{
    public function create()
    {
        $countries = Country::all();
        $categories = Category::all();

        return view('invoices.create', compact('countries', 'categories'));
    }
}
