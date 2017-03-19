<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Currency;
use App\Invoice;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        $lastInvoice = Invoice::orderBy('created_at', 'desc')->first();

        return view('invoices.create', compact('categories', 'countries', 'currencies', 'payment_methods', 'lastInvoice'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'date' => 'required|date_format:"Y-m-d"',
            'country' => 'exists:countries,id',
            'category' => 'exists:categories,id',
            'payment_method' => 'exists:payment_methods,id',
            'currency' => 'exists:currencies,id',
            'amount_in_original_currency' => 'required|numeric',
            'one_dollar_rate' => 'required|numeric|min:0.01',
            'image' => 'image'
        ]);

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
        $invoice->amount_in_dollars = $invoice->amount_in_original_currency / $invoice->one_dollar_rate;
        $invoice->include_rut = $request->has('include_rut') ? true : false;
        $invoice->assign_anii = $request->has('assign_anii') ? true : false;
        $invoice->personal_spending = $request->has('personal_spending') ? true : false;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $fileName = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(App::basePath() . '/public/uploads', $fileName);

            $invoice->image_url = env('APP_URL') . 'uploads/' . $fileName;
        }

        $invoice->save();

        return redirect('/invoices');
    }
}
