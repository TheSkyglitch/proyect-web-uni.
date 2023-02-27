<?php

namespace App\Http\Controllers;

use App\Models\Victima;
use Illuminate\Http\Request;

/**
 * Class VictimaController
 * @package App\Http\Controllers
 */
class VictimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $victimas = Victima::paginate();

        return view('victima.index', compact('victimas'))
            ->with('i', (request()->input('page', 1) - 1) * $victimas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $victima = new Victima();
        return view('victima.create', compact('victima'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Victima::$rules);

        $victima = Victima::create($request->all());

        return redirect()->route('victimas.index')
            ->with('success', 'Victima created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $victima = Victima::find($id);

        return view('victima.show', compact('victima'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $victima = Victima::find($id);

        return view('victima.edit', compact('victima'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Victima $victima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Victima $victima)
    {
        request()->validate(Victima::$rules);

        $victima->update($request->all());

        return redirect()->route('victimas.index')
            ->with('success', 'Victima updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $victima = Victima::find($id)->delete();

        return redirect()->route('victimas.index')
            ->with('success', 'Victima deleted successfully');
    }
}
