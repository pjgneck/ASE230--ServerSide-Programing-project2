<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('department_id')) {
            return Inventory::with('department')->where('department_id', $request->department_id)->get();
        }
        return Inventory::with('department')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $inventory = Inventory::create($validatedData);

        return response()->json($inventory, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return $inventory->load('department');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|max:255',
            'department_id' => 'sometimes|required|exists:departments,id',
        ]);

        $inventory->update($validatedData);

        return response()->json($inventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return response()->json(null, 204);
    }

    /**
     * Display a listing of the resource by department.
     */
    public function byDepartment($department_id)
    {
        return Inventory::with('department')->where('department_id', $department_id)->get();
    }
}
