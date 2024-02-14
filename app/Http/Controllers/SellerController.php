<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use App\Models\SoldProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
        {
            $sellers = Seller::with('invoices.soldProducts')->orderBy('name')->get();
            $topProducts = [];
            foreach ($sellers as $seller) {
                $seller->total_sales += $seller->invoices->sum('total');

                foreach ($seller->invoices as $invoice) {
                    foreach ($invoice->soldProducts as $soldProduct) {
                        $productId = $soldProduct->product->id;

                        if (isset($topProducts[$productId])) {
                            // El producto ya existe, actualizar la cantidad
                            $topProducts[$productId][0] += $soldProduct->quantity;
                        } else {
                            // El producto no existe, agregarlo al array
                            $topProducts[$productId] = [
                                $soldProduct->quantity,
                                $soldProduct->product->name,
                            ];
                        }
                    }
                }
                    $seller->top_products = $topProducts;
                // Obtener los numeros de ventas del vendedor
                foreach ($seller->invoices as $invoice) {
                    foreach ($invoice->soldProducts as $soldProduct) {
                        $seller->number_sells += $soldProduct->quantity;  // Acceder directamente al valor numérico
                    }

                }
            }
            return view('sellers.index', compact('sellers'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'identification_card' => 'required|string|unique:sellers|max:255', // Ensure unique IDs
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Seller::create($request->all());

        return redirect()->route('sellers.index')->with('success', 'Vendedor creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Seller::findOrFail($id); // Use findOrFail for a secured and concise look
        return view('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        return view('sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'identification_card' => 'required|string|unique:sellers,identification_card,' . $id . ',id|max:255', // Enforce unique IDs even on update
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $seller = Seller::findOrFail($id);
        $seller->update($request->all());

        return redirect()->route('sellers.index')->with('success', 'Vendedor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seller::findOrFail($id)->delete();

        return redirect()->route('sellers.index')->with('success', 'Vendedor eliminado correctamente.');
    }
}
