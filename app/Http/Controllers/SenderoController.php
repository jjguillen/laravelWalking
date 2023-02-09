<?php

namespace App\Http\Controllers;

use App\Models\Sendero;
use Illuminate\Http\Request;

class SenderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.senderos', [ 'senderos' => Sendero::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNuevoSendero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function show(Sendero $sendero)
    {
        return view('web.senderoDetalle', ['sendero' => $sendero]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function edit(Sendero $sendero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sendero $sendero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sendero $sendero)
    {
        $sendero->delete();
        return redirect('/senderos');
    }
}
