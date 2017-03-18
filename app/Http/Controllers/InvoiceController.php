<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Currency;
use App\Invoice;
use App\PaymentMethod;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('created_at', 'desc')->get();

        return view('invoices.index', compact('invoices'));
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('invoices.show', compact('invoice'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $currencies = Currency::orderBy('name')->get();
        $payment_methods = PaymentMethod::orderBy('name')->get();

        return view('invoices.create', compact('categories', 'countries', 'currencies', 'payment_methods'));
    }

    public function store(Request $request)
    {
        $invoice = new Invoice;

        $invoice->date = $request->input('date');
        $invoice->trip = $request->input('trip');
        $invoice->country_id = $request->input('country');
        $invoice->description = $request->input('description');
        $invoice->business_name = $request->input('business_name');
        $invoice->invoice_number = $request->input('invoice_number');
        $invoice->category_id = $request->input('category');
        $invoice->payment_method_id = $request->input('payment_method');
        $invoice->currency_id = $request->input('currency');
        $invoice->amount_in_original_currency = $request->input('amount_in_original_currency');
        $invoice->one_dollar_rate = $request->input('one_dollar_rate');
        $invoice->include_rut = $request->has('include_rut') ? true : false;
        $invoice->assign_anii = $request->has('assign_anii') ? true : false;
        $invoice->personal_spending = $request->has('personal_spending') ? true : false;

        $invoice->save();

        return redirect('/invoices');
    }
}
