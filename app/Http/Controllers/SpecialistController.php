<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {
        return response()->json(Specialist::all());
    }

    public function store(Request $request)
    {
        $specialist = Specialist::create($request->all());

        return response()->json($specialist, 201);
    }

    public function show(string $id)
    {
        return response()->json(Specialist::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $specialist = Specialist::findOrFail($id);
        $specialist->update($request->all());

        return response()->json($specialist);
    }

    public function destroy(string $id)
    {
        Specialist::destroy($id);

        return response()->json([
            'message' => 'Specialist deleted successfully'
        ]);
    }
}