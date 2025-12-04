<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('inventory_id')) {
            return Item::with('inventory')->where('inventory_id', $request->inventory_id)->get();
        }
        return Item::with('inventory')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|integer',
            'inventory_id' => 'required|exists:inventories,id',
        ]);

        $item = Item::create($validatedData);

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return $item->load('inventory');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|max:255',
            'quantity' => 'sometimes|required|integer',
        ]);

        $item->update($validatedData);

        return response()->json($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json(null, 204);
    }

    /**
     * Display a listing of the resource by inventory.
     */
    public function byInventory($inventory_id)
    {
        return Item::with('inventory')->where('inventory_id', $inventory_id)->get();
    }
}
