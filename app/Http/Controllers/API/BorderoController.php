<?php

namespace App\Http\Controllers\API;

use App\Bordero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BorderoController extends Controller
{
    /**
     * @return BorderoCollection
     */
    public function index()
    {
        $borderos = Bordero::with(['dbanco', 'dprojeto'])
            ->orderBy('bor_dataope', 'desc')
            ->get();

        return response()->json([
            'data' => $borderos->toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $bordero = Bordero::create($request->all());

            return response()->json([
                'data' => $bordero->toArray()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bordero  $bordero
     * @return \Illuminate\Http\Response
     */
    public function show(Bordero $bordero)
    {
        return response()->json([
            'data' => $bordero->toArray(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bordero  $bordero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bordero $bordero)
    {
        try {
            $bordero->update($request->all());

            return response()->json([
                'data' => $bordero->toArray()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bordero  $bordero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bordero $bordero)
    {
        try {
            $bordero->delete();

            return response()->json([
                'data' => $bordero->toArray()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }
}
