<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Seller;
use App\Models\SoldProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::with('client', 'seller', 'soldProducts.product')->get(); // Eager load data
        // dd($invoices);
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::select('name', 'id')->get();
        $sellers = Seller::select('name', 'id')->get();
        $products = Product::select('name', 'id', 'price')->get();
        return view('invoices.create', compact('clients', 'sellers', 'products'));
    }

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'client_id' => 'required|integer|exists:clients,id',
        'seller_id' => 'required|integer|exists:sellers,id',
        'subTotal' => 'required|numeric|min:0', // Ensure non-negative values
        'grandTotal' => 'required|numeric|min:0', // Ensure non-negative values
        'products' => 'required|array', // Validate product data presence
        'products.*.productId' => 'required|integer|exists:products,id', // Validate product IDs
        'products.*.quantity' => 'required|integer|min:1', // Ensure positive quantity
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

       $invoiceData = [
           'client_id' => (int)$request->client_id,
           'seller_id' => (int)$request->seller_id,
           'sub-total' => $request->subTotal,
           'total' => $request->grandTotal,
       ];
       $invoice = Invoice::create($invoiceData);

        // Save sold products data
        foreach ($request->products as $productData) {
            SoldProduct::create([
                'invoice_id' => (int)$invoice->id,
                'product_id' => (int)$productData['productId'],
                'quantity' =>(int) $productData['quantity'],
            ]);
        }

        return redirect()->route('invoices.index')->with('success', 'Factura creada correctamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
